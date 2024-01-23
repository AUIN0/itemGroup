@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container">
   <h1 class="alert alert-success text-center">Welcome to my website</h1>
   <div class="row text-center d-flex align-items-center justify-content-center">
      <div class="col-sm-4 text-center">
        <div class="card">
          <a href="{{route('item')}}">
              <div class="card-body">
                  <h4>Items</h4>
                  <h3><i class="bi bi-diagram-2" style="font-size: larger;"></i></h3>
              </div>
          </a>
        </div>
      </div>

      <div class="col-sm-4 text-center">
        <div class="card">
        <a href="{{route('itemgroup')}}">
            <div class="card-body">
                <h4>Item groups</h4>
                <h3><i class="bi bi-collection"></i></i></h3>
            </div>
        </a>
        </div>
      </div>
   </div>
</div>

@endsection


<!-- 
@extends('layouts.app') 

@section('content')

<div class="container">
    <h1 class="alert alert-success text-center">Welcome to my Web Applicaton</h1>

    <div class="row text-center ">
        @foreach ($data as $row)
        <div class="col-md-5 d-flex align-items-center text-center justify-content-center">
            <div class="card p-5 m-2" style="width: 150px highet:150px">
                <div class="card-body">
                 <h3>{{$row->ItemGroupName}}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection -->