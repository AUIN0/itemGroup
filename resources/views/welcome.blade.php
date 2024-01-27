@extends('layouts.app')
@section('content')

<?php $c = 0; ?>


<div class="container">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <h1 class="alert alert-dark text-center">Welcome to my website!</h1>

    @while($c < $count)

    <div class="row text-center d-flex align-items-center justify-content-center mt-4">
        <div class="col-sm-4 text-center">
        <a href="{{route('showProd',['id'=>$data[$c]->id])}}" class="text-decoration-none">
            <div class="card">
                <div class="card-body"> 
                    <h4>{{$data[$c]->Itemgroupsname}}</h4>
                    <h3><i class="bi bi-collection"></i></h3>
                </div>
            </div>
        </a>
        </div>

        <?php $c++;?>
        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a href="{{route('showProd',['id'=>$data[$c]->id])}}" class="text-decoration-none">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->Itemgroupsname}}</h4>
                    <h3><i class="bi bi-collection"></i></h3>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif

        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a href="{{route('showProd',['id'=>$data[$c]->id])}}" class="text-decoration-none">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->Itemgroupsname}}</h4>
                    <h3><i class="bi bi-collection"></i></h3>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif
        @endwhile
    </div>

    

    <h3 class="alert alert-dark text-center m-4">Apply to be one of our partners</h3>
    <div>
        <button class="btn btn-success">Apply</button>
    </div>
    
</div>

@endsection