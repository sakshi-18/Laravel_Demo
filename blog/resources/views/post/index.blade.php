@extends('layouts.master')

     @if(Auth::check())
        @section('content')
            @foreach($posts as $post)
                @include('post.posts')
             @endforeach
        @endsection
     @endif

