<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;
use Carbon\Carbon;
class PostController extends Controller
{
    //
    
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }
    function index(){
        session()->flash('message','Your post has now been published.');
        $posts = Post::latest()
        ->filter(request(['month','year']))
        ->get();

        // $posts = Post::latest();

        // if($month=request('month')){
        //     $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }

        // if($year=request('year')){
        //     $posts->whereYear('created_at', $year);
        // }

 
        // $archives = Post::selectRaw('year(created_at) year, monthname(created_at) month,count(*) published')
        // ->groupBy('year','month')
        // ->orderByRaw('min(created_at) desc')->get();



        return view('post.index',compact('posts'));
    }

    function create(){ /* Create a post */

        return view('post.create');

    }

    function store(){ /* save a post */

        // dd(request(['title','body']));

        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // Post::create([
        //     'title'=>request('title'),
        //     'body'=>request('body')
        // ]);
        
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        // Post::create([
        //     'title'=> request('title'),
        //     'body'=> request('body'),
        //     'user_id' => auth()->user()->id
        // ]);

        return redirect('/');

    }
    function show(Post $post_id){ /* Show a post */

        $post = $post_id;
        return view('post.show',compact('post'));

    }




}
