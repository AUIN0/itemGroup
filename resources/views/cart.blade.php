@extends('layouts.app')

@section('content')
dd($x)
<div class="container">
        @foreach ($x as $row)
            <div class="card mt-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="{{ $row->img }}" height="168" width="267">
                        </div>
                        <div class="col-sm-9 text-start">
                            <h1 class="alert alert-info text-dark">{{ $row->itemname }}</h1>
                            <h5>Price: {{ $row->price }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    <button type="button" class="btn btn-warning btn-block btn-lg d-flex justify-content-center">Proceed to Pay</button>
</div>

@endsection