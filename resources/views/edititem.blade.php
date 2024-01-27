@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success text-center">Edit item groups information</h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{ route('updateI') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <div class="mb-3">
                            <label for="itemname" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="itemname" name="itemname" value="{{ $item->itemname }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price" value="{{ $item->price }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="qty" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="qty" name="qty" value="{{ $item->qty }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" value="{{ $item->color }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="itemgroupno" class="form-label">Item Group Number</label>
                            <input type="text" class="form-control" id="itemgroupno" name="itemgroupno" value="{{ $item->itemgroupno }}" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-2">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection