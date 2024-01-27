@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <h1 class="alert alert-success text-center">Item groups</h1>
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <form action="{{ route('saveItemGroup') }}" method="post">
                        @csrf
                        <label for="Itemgroupsname" class="p-2 text-center">Enter group name</label>
                        <input type="text" class="form-control form-control-sm " name="Itemgroupsname" id="Itemgroupsname">
                        <div class="row">

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-2" onclick="showMessage()">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>Group ID</th>
                        <th>Group Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->Itemgroupsname}}</td>
                        <td><a href="{{ route('editG', ['x' => $row->id]) }}"><i class="fa-regular fa-pen-to-square text-success"></i></a></td>
                        <td><a href="{{ route('delG', ['x' => $row->id]) }}"><i class="fa-solid fa-trash text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function showMessage()
    {
        Swal.fire({
            position: "top-center",
            icon: "success",
            title: "تم الحفظ بنجاح",
            showConfirmButton: false,
            confirmButtonText: "تأكيد",
            timer: 10000
        });
    }
</script>
    
@endsection