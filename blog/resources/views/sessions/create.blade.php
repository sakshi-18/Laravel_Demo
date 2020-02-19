@extends('layouts.master')

@section('content')

<h1> Sign In </h1>
<hr>
<form method="POST" action="/login">
    {{ csrf_field() }}

   {{-- <div class="form-group">
       <label for="email">Email : </label>
       <input type="email" id="email" name="email" class="form-control" required>
   </div> --}}

   <div class="form-group">
    <label for="id">Email : </label>
    <input type="text" id="id" name="email" class="form-control" required>
   </div>

   <div class="form-group">
       <label for="password">Password : </label>
       <input type="password" id="password" name="password" class="form-control" required>
   </div>
   <div class="form-group">
       <button type="submit" class="btn btn-primary">Login</button>
   </div>

   @include('layouts.errors')
</form>

@endsection