<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SessionController extends Controller
{

    public function __construct(){
        $this->middleware('guest')->except(['destroy']);
    }

    public function create(){


         return view('sessions.create');

    }



    public function destroy(){

        auth()->logout();

        return redirect()->home();

    }



    public function store(){

        if(! Auth::attempt(['id' => request('id'), 'password' => request('password')])){
            return back()->withErrors([
                'message' => "Please check your credentials and try again."
            ]);
        }
        else{
            return redirect()->home();
        }

    }
}
