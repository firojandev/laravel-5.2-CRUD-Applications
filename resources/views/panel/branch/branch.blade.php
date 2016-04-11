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
             <li><a href="{{URL::to('/')}}">Home</a></li>
            <li class="active"><a href="{{URL::to('branch')}}">Branch</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
      </div>

     
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">
          <h2>Branch List</h2> 
           
           <div>
          <a href="{{URL::to('/add-branch')}}">Add Branch</a>
          </div>
           
           @if (Session::has('message'))
                <div class="alert alert-{{ Session::get('message_type') }}">{{ Session::get('message') }}</div>
          @endif


          @if(count($branchList)>0)

          <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Branch Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 
                 @foreach($branchList as $branch)

                  <tr>
                    <td>{{$branch->branch_name}}</td>
                    <td>{{$branch->branch_address}}</td>
                    <td>{{$branch->branch_phone}}</td>
                    <td>
                    <a href="{{URL::to('/')}}/edit-branch/{{$branch->id}}">Edit</a> | 
                    <a href="{{URL::to('/')}}/delete-branch/{{$branch->id}}" onclick="return confirm('Are you sure you want to delete this branch')">Delete</a>

                    </td>
                  </tr>

                  @endforeach
                 
                </tbody>
              </table>
           @else

           <div>No record found</div>

           @endif


          </div>
       
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div> <!-- /container -->

   
  </body>
</html>