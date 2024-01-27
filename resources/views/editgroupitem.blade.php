@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row d-flex justify-content-center">
        <h1 class="alert alert-success text-center">Edit item groups information</h1>
        <div class="col">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <form action="{{ route('updateG') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <label for="x1">Item name</label>
                        <input type="text" id="namegroup" name="namegroup" value="{{ $item -> Itemgroupsname }}">

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