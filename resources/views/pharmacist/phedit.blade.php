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

<body>


    <h2 style="text-align:center;">EDIT DRUG DETAILS</h2>


    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{\Session::get('success')}} </p>
    </div>
    @endif

    <form method="post" action="{{action('PharmacistController@update', $id)}}" enctype="multipart/form-data" style="border: 1px solid black; padding:20px;">
        {{ csrf_field() }}

        <input type="hidden" name="_method" value="PATCH" />
        <div class="form-group row">
                <input name="drug_name" type="text" class="form-control" id="drug_name"  value="{{$pharmacist->drug_name}}" placeholder="Drug Name" required>
        </div>

        <div class="form-group row">
                <input name="drug_type" type="text" class="form-control" id="drug_type" value="{{$pharmacist->drug_type}}" placeholder="Drug Type" required>
        </div>

        <div class="form-group row">
                <input name="drug_state" type="text" class="form-control" id="drug_state" value="{{$pharmacist->drug_state}}" placeholder="Drug State" required>   
        </div>

        <div class="form-group row">
                <input name="drug_quantity" type="number" class="form-control" id="drug_quantity" value="{{$pharmacist->drug_quantity}}" placeholder="Quantity" min=0 max=1000 step=1 required>
        </div>

        <div class="form-group row">
                <input name="manufacture_date" type="date" class="form-control" id="manufacture_date" value="{{$pharmacist->manufacture_date}}" placeholder="Manufacture Date" required>
        </div>

        <div class="form-group row">
                <input name="expiration_date" type="date" class="form-control" id="expiration_date" value="{{$pharmacist->expiration_date}}" placeholder="Expiration Date" required>
        </div>

        <div class="form-group row">
                <input name="delivery_date" type="date" class="form-control" id="delivery_date" value="{{$pharmacist->delivery_date}}"  placeholder="Delivery Date" required>
        </div>

        <div class="form-group row">
                <input name="price" type="number" class="form-control" id="price" value="{{$pharmacist->price}}" placeholder="Price" min=0.00 max=10000.00 step=0.01 required>
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-sm-3 col-sm-10">
                <button type="submit" class="btn btn-primary">EDIT</button>
            </div>
        </div>
    </form>
</body>

</html>