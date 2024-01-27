@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="alert alert-dark text-center">Welcome to Ahmedbucks!</h1>
    <div class="row">
        <div class="col">
            <table class="table">                
                <thead>
                    <tr style="font-size: 35px;" class="text-center">
                        <th>Title</th>
                        <th>Description</th>
                        <th>image</th>
                    </tr>
                </thead>
                @foreach ($data as $row)
                    
                <tbody>
                    <tr style="font-size: 25px;" class="text-center">
                        <td>{{$row->title}}</td>
                        <td>{{$row->description}}</td>
                        <td><img src="{{ asset($row->image) }}" alt="Image" width="250" height="250"></td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</div>

@endsection