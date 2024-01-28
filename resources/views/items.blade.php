@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Bootstrap Icons CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <h1 class="alert alert-success text-center">Items</h1>

        <!-- Form for Input -->
        <form method="POST" action="{{ route('saveItem') }}">
            @csrf
            <div class="mb-3">
                <label for="itemname" class="form-label">Item Name</label>
                <input type="text" class="form-control" id="itemname" name="itemname" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>

            <div class="mb-3">
                <label for="qty" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="qty" name="qty" required>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>

            <div class="mb-3">
                <label for="itemgroupno" class="form-label">Item Group Number</label>
                <input type="text" class="form-control" id="itemgroupno" name="itemgroupno" required>
            </div>

            <div class="mb-3">
                <label for="img" class="form-label">Product Image</label>
                <input type="text" class="form-control" id="img" name="img" required>
            </div>

            <button type="submit" class="btn btn-primary">Save Item</button>
        </form>

        <!-- Display Items in a Table -->
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Color</th>
                            <th>Item Group Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($item as $item)
                            <tr>
                                <td>{{ $item->itemname }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->color }}</td>
                                <td>{{ $item->itemgroupno }}</td>
                                <td><a href="{{ route('editI', ['x' => $item->id]) }}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>
                                <td><a href="{{ route('delI', ['x' => $item->id]) }}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
