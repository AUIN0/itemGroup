@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row text-center">
        <div class="col-sm-12">
            <h1 class="alert alert-success text-center">Add groups item</h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('saveItemGroup') }}" method="post">
                        @csrf
                        <label for="Itemgroupsname">Group name</label>
                        <input type="text" name="Itemgroupsname" id="Itemgroupsname">
                        <div class="row mt-3 p-3">
                            <div class="col">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            

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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection