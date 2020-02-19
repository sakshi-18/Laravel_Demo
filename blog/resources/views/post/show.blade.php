@extends('layouts.master')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">
            {{$post->title}}
    </h2>

       {{$post->body}}
       <hr>
       <div class="comments">
           <ul class = "list-group">
           @foreach($post->comments as $comment)
           <li class="list-group-item">
               {{$comment->body}}
               <strong>
                   : {{$comment->created_at->toFormattedDateString()}}
               </strong>
           </li>
           @endforeach
        </ul>
       </div>

      

       <div class="card">
           <div class="card-body">
               <form method="POST" action="/post/{{$post->id}}/comment">
                {{ csrf_field()}}
                   <div class="form-group">
                       <textarea name="body" placeholder="Your comment here.." class="form-control" required></textarea>
                   </div>
                   <div class="form-group">
                       <button type="submit" class="btn btn-primary">Add Comment</button>
                   </div>
               </form>
           </div>
       </div>
       <hr>
       @if(count($errors))
       <div class="form-group">
           <div class = "alert alert-danger">
               <ul>
                   @foreach($errors->all() as $error)
                   <li>{{$error}}</li>
                   @endforeach
               </ul>
           </div>
       </div>
       @endif
   
</div>
@endsection