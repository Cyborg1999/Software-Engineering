<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHARMACIST</title>
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
            margin: 1%;
        }
    </style>
</head>


<nav class="navbar navbar-dark bg-primary"">
  <div class=" container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{route('home')}}" style="color:white;">SIWAKA PHARMACIST</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('pharmacist.create')}}" style="color:white;"><b>Add Drug</b></a></li>
        <li><a href="{{route('pharmacist.index')}}" style="color:white;"><b>View Inventory</b></a></li>
        <li><a href="{{url('/order')}}" style="color:white;"><b>Order New Drug</b></a></li>
    </ul>
    <form class="navbar-form navbar-left">
            <input class="form-control" id="myInput" type="text" placeholder="Search.." ><i class="glyphicon glyphicon-search"></i>
            {{ Auth::user()->name }}
    </form>
    </div>
</nav>

<body>

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">List Of Items </h3>
            <br />

            @if(\Session::has('success'))
            <div class="alert alert-success">
                <p>{{\Session::get('success')}} </p>
            </div>
            @endif

            <div align="right">
            
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Drug ID</th>
                            <th>Drug Name</th>
                            <th>Drug Type</th>
                            <th>Drug State</th>
                            <th>Drug Quantity</th>
                            <th>Manufacture Date</th>
                            <th>Expiration Date</th>
                            <th>Delivery Date</th>
                            <th>Price</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($pharmacists as $row)
                        <tr>
                            <td>{{$row['id']}}</td>
                            <td>{{$row['drug_name']}}</td>
                            <td>{{$row['drug_type']}}</td>
                            <td>{{$row['drug_state']}}</td>
                            <td>{{$row['drug_quantity']}}</td>
                            <td>{{$row['manufacture_date']}}</td>
                            <td>{{$row['expiration_date']}}</td>
                            <td>{{$row['delivery_date']}}</td>
                            <td>{{$row['price']}}</td>
                            <td><a href="{{action('PharmacistController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
                            <td>
                                <form method="post" class="delete_form" action="{{action('PharmacistController@destroy',$row['id'])}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('.delete_form').on('submit', function() {
                    if (confirm("Are You Sure You Want To Delete It?")) {
                        return true;
                    } else {
                        return false;
                    }
                });
            });

            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>


</body>

</html>