@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="alert alert-success text-center">Items info</h1>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Item name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Color</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($data != null)
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->itemname }}</td>
                                        <td>{{ $row->price }}</td>
                                        <td>{{ $row->qty }}</td>
                                        <td>{{ $row->color }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection