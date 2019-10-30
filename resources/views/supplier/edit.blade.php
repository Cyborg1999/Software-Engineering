@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h3 style="text-align:center">EDIT ITEMS</h3>

        @if(\Session::has('success'))
        <div class="alert alert-success">
            <p>{{\Session::get('success')}} </p>
        </div>
        @endif

        <form method="post" action="{{action('SupplierController@update', $id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PATCH" />
            <div class="form-group">
                <input type="text" name="drug_name" class="form-control" placeholder="Enter Drug Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="drug_type" class="form-control" value="{{$supplier->drug_type}}" placeholder="Enter Drug Type" required>
            </div>
            <div class="form-group">
                <input type="text" name="drug_state" class="form-control" value="{{$supplier->drug_state}}" placeholder="Enter Drug State" required>
            </div>
            <div class="form-group">
                <input name="price" type="number" class="form-control" placeholder="Price" min=0.00 max=10000.00 step=0.01 value="{{$supplier->price}}" required>
            </div>
            <fieldset class="form-group row">
                <div class="row">
                    <legend class="col-form-label col-sm-10 pt-0">Available:</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability" id="gridRadios1" value="{{$supplier->availability}}" required>
                            <label class="form-check-label" for="gridRadios1">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="availability" id="gridRadios2" value="{{$supplier->availability}}" required>
                            <label class="form-check-label" for="gridRadios2">
                                No
                            </label>
                        </div>
                    </div>
                    </legend>
                </div>
            </fieldset>
            <div class="form-group row">
                <div class="col-sm-10">
                    <label for="photo">Upload Photo</label>
                    <input name="photo" type="file" class="custom-file-input" id="upload" value="{{$supplier->availability}}" required>
                    <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit" />
            </div>
        </form>
    </div>
</div>
@endsection