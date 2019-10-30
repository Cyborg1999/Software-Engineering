@extends('master')

@section('content')
<h2 style="text-align:center;">ADD NEW ITEM</h2>


@if(\Session::has('success'))
<div class="alert alert-success">
    <p>{{\Session::get('success')}} </p>
</div>
<img src="/images/{{ Session::get('path') }}" width="30%" />
@endif
<form method="post" action="{{url('supplier')}}" enctype="multipart/form-data" style="border: 1px solid black; padding:20px;">
            {{ csrf_field() }}
        
                <div class="form-group row">
                    <label for="drug_name" class="col-sm-3 col-form-label">Name Of Drug:</label>
                    <div class="col-sm-10">
                        <input name="drug_name" type="text" class="form-control" id="drug_name" placeholder="Drug Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="drug_type" class="col-sm-3 col-form-label">Type Of Drug:</label>
                    <div class="col-sm-10">
                        <input name="drug_type" type="text" class="form-control" id="drug_type" placeholder="Drug Type" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="drug_state" class="col-sm-3 col-form-label">State Of Drug:</label>
                    <div class="col-sm-10">
                        <input name="drug_state" type="text" class="form-control" id="drug_state" placeholder="Drug State" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <label for="price">Price of Drug:</label>
                        <input name="price" type="number" class="form-control" id="price" placeholder="Price" min=0.00 max=10000.00 step=0.01 required>
                    </div>
                </div>
                <fieldset class="form-group row">
                        <div class="row">
                            <legend class="col-form-label col-sm-10 pt-0">Available:</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="availability" id="gridRadios1" value="yes" >
                                    <label class="form-check-label" for="gridRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="availability" id="gridRadios2" value="no" >
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
                        <input name="photo" type="file" class="custom-file-input" id="upload" required>
                        <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-10">
                        <button type="submit" class="btn btn-primary">ADD ITEM</button>
                    </div>
                </div>
        </form>


@endsection