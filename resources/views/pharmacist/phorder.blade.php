<!DOCTYPE html>
<html lang="en">

<head>
    <title>ORDER DRUGS</title>
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
            background-image: url('home1.jpg');
          /*  background-image:url('home1.jpg');*/
            background-color: whitesmoke;

            background-position-x: 100%;
            background-size: 100%;
            background-attachment: fixed;
            margin: 1%;
        }


    </style>
</head>

        
    <nav class="navbar navbar-dark bg-primary"">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('home')}}" style="color:white;">SIWAKA PHARMACIST</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route('pharmacist.create')}}"  style="color:white;"><b>Add Drug</b></a></li>
      <li><a href="{{route('pharmacist.index')}}"  style="color:white;"><b>View Inventory</b></a></li>
      <li><a href="#" style="color:white;"><b>Order New Drug</b></a></li>
    </ul>
    <form class="navbar-form navbar-left">
    {{ Auth::user()->name }}
    </form>
  </div>
</nav>
<body >


<h2 style="text-align:center;">ORDER DRUGS</h2>

@if(\Session::has('success'))
<div class="alert alert-success">
    <p>{{\Session::get('success')}} </p>
</div>
@endif

<form method="post" action="{{url('pharmacist')}}" enctype="multipart/form-data" style="border: 1px solid black; padding:20px;">
            {{ csrf_field() }}
        
                <div class="form-group row">
                    <label for="drug_name" class="col-sm-3 col-form-label">Name Of Drug:</label>
                    <div class="col-sm-10">
                        <input name="drug_name" type="text" class="form-control" id="drug_name" placeholder="Drug Name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="drug_quantity">Quantity of Drug:</label>
                        <input name="drug_quantity" type="number" class="form-control" id="drug_quantity" placeholder="Quantity" min=0 max=1000 step=1 required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="expectedDeliveryDate">Expected Delivery Date:</label>
                        <input name="delivery_date" type="date" class="form-control" id="delivery_date" min=0 max=1000 step=1 required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-10">
                        <button type="submit" class="btn btn-primary">ORDER DRUG</button>
                    </div>
                </div>
        </form>
        </body>

</html>