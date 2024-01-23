@extends('layouts.app')

@section('content')
<div class="container">


    @foreach ($data as $row)
            <div class="card mt-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="#">
                        </div>
                        <div class="col-sm-9 text-start">
                            <h1 class="alert alert-info text-dark">{{ $row->itemname }}</h1>
                            <h5>Price: {{ $row->price }}</h5>

                            <div class="row">
                                <div class="col text-center">
                                    <button class="btn btn-success">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
</div>
@endsection