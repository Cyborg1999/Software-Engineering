@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">List Of Items </h3>
        <br />
        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}} </p>
        </div>
       <!-- <img src="/images/{{ Session::get('path') }}" width="30%" />-->
        @endif

        <div align="right">
            <a href="{{route('supplier.create')}}" class="btn btn-primary">ADD</a>
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
                    <th>Edit</th>
                    <th>Delete</th>
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
                    <td><a href="{{action('SupplierController@edit',$row['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form method="post" class="delete_form" action="{{action('SupplierController@destroy',$row['id'])}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.delete_form').on('submit', function(){
               if(confirm("Are You Sure You Want To Delete It?"))
                {
                    return true;
                }
                else{
                       return false;
                }
            });
        });
        </script>

    @endsection