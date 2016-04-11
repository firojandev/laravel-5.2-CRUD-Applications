<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Laravel 5.2 CRUD project demo</title>

    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet">

     <!-- Custom styles for this template -->
    <link href="/css/justified-nav.css" rel="stylesheet">
   
  </head>

  <body>

    <div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Laravel 5.2 Demo Application</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
            <li ><a href="{{URL::to('branch')}}">Branch</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Laravel 5.2 Demo Application</h1>
        <p class="lead">This is a demo application tutorial for laravel beginner</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">I hope you will enjoy it</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>1st Column</h2>
          <p class="text-danger">Write your conetnt here</p>
          
        </div>
        <div class="col-lg-4">
           <h2>2nd Column</h2>
          <p class="text-danger">Write your conetnt here</p>
       </div>
        <div class="col-lg-4">
          <h2>3rd Column</h2>
          <p class="text-danger">Write your conetnt here</p>
        </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2015 Online ICT Tutor</p>
      </footer>

    </div> <!-- /container -->

   
  </body>
</html>