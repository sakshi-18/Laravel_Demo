
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

    @include('layouts.nav')
    @if($flash=session('message'))
     <div class="alert alert-success" id="flash_msg" role="alert">
       {{$flash}}
     </div>
     @endif
    @include('layouts.header')

    <div class="container">

      <div class="row">

        <div class="col-7 blog-main">

           @yield('content')
         
        </div><!-- /.blog-main -->
        <div class="col-3 offset-sm-1 blog-sidebar" >
            @include('layouts.sidebar')
        </div>
      </div><!-- /.row -->

    </div><!-- /.container -->

    @include('layouts.footer')

  </body>
</html>
