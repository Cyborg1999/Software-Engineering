@extends('layouts.app')

@section('content')

<h1 style="text-align:center; color:cornflowerblue;">Welcome,  {{ Auth::user()->name }} ! </h1>

<br><br><br>
<div class="card-deck">
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">ADD NEW DRUG</h5>
      <p class="card-text"><small class="text-muted">Add a new drug to your inventory</small></p>
      <a href="{{route('pharmacist.create')}}" class="btn btn-primary">ADD</a>
    </div>
  </div>
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">VIEW INVENTORY</h5>
      <p class="card-text"><small class="text-muted">View,Edit Or Delete Items From the Inventory</small></p>
      <a href="{{route('pharmacist.index')}}" class="btn btn-primary">VIEW</a>
    </div>
  </div>
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">ORDER DRUG</h5>
      <p class="card-text"><small class="text-muted">Order For New Drugs From Suppliers</small></p>
      <a href="{{url('/order')}}" class="btn btn-primary">ORDER</a>
    </div>
  </div>
</div>
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>-->

@endsection
