<!DOCTYPE html>
<html lang="en">

<head>
    <title>SUPPLIER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        html,
        body {
            /*background-color: #fff;*/
            color: #636b6f;
            /* color:seashell;*/
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            /*margin: 0;*/
            /*background-image: url('home1.jpg');*/
          /*  background-image:url('home1.jpg');*/
            background-color: whitesmoke;

            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 0px;
        }


    </style>
</head>

<body >
    <div class="container">
        
    <nav class="navbar navbar-dark bg-primary"">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;">SIWAKA PHARMACY SUPPLIER</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('supplier.create')}}" style="color:white;"><b>Add Drug</b></a></li>
      <li><a href="{{route('supplier.index')}}" style="color:white;"><b>View Drug List</b></a></li>
      <li><a href="#" style="color:white;"><b>View Orders</b></a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</nav>
        @yield('content')
    </div>
</body>

</html>