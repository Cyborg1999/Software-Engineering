@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">Available Items </h3>
        <br />
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}} </p>
        </div>
        @endif

        <div align="right">
            <a href="{{route('supplier.order')}}" class="btn btn-primary">ORDER</a>
            <br />
            <br />
            <table class="table table-bordered">
                <tr>
                    <th>Drug Name</th>
                    <th>Drug Type</th>
                    <th>Drug State</th>
                    <th>Price</th>
                    <th>Availability</th>
                    <th>Photo</th>
                    <th>Place Order</th>
                    
                </tr>
                @foreach($suppliers as $row)
                <tr>
                    <td>{{$row['drug_name']}}</td>
                    <td>{{$row['drug_type']}}</td>
                    <td>{{$row['drug_state']}}</td>
                    <td>{{$row['price']}}</td>
                    <td>{{$row['availability']}}</td>
                  <!--  <td>{{$row['photo']}}</td> -->
                  <td><img src="/public/images/{{ asset('path') }}" width="200" height="200" /></td>
                  <!--<td><img src="{{asset('/images/' . 'path')}}" width="200" height="200" /></td>-->
                   <!-- <td><img src="/images/{{ Session::get('path') }}" width="30%" /></td>-->
                    @endforeach
                    <td><a href="{{action('SupplierController@order',$row['id'])}}" class="btn btn-warning">Order</a></td>
                   
                </tr>
               
            </table>
        </div>
    </div>

    @endsection