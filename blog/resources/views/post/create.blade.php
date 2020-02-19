@extends('layouts.master')

@section('content')

<h1> Create a Post </h1>
<form method="POST" action="/posts">
    {{ csrf_field()}}
    <div class="form-group">
      <label for="title">Title :</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" placeholder="Enter title" required>
    </div>
    <div class="form-group">
      <label for="body">Body :</label>
      <textarea class="form-control" name="body" id="body" required></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
    </div>
    
    @include('layouts.errors')
</form>
@endsection