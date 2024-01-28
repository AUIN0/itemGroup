<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <style>
    *{
      font-family: cairo;
    }
   </style>
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body dir="rtl">
    <div id="app">
          <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid" >
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" style="font-size: 25px" href="{{route('showGroup')}}">Home</a>
                    </li>
                </ul>
              </div>
             
             
              <div class="collapse navbar-collapse" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <h3 class="nav-link active text-white" aria-current="page" href="#" style="font-family: cairo; font-size: 35px;">Shopmania</h3>
                    </li>
                   
                    
                  </ul>
               
              </div>


              <div>
                @if(Auth::guest())
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" style="font-size: 25px" aria-current="page" class="nav-link active text-white">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" style="font-size: 25px" aria-current="page" class="nav-link active text-white">Register</a>
                        </li>
                    </ul>
                @else
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" style="font-size: 25px" aria-current="page" class="nav-link active text-white">Logout</a>
                        </li>
                        <li class="nav-item">
                        <a href="" style="font-size: 25px" class="fa-solid fa-cart-shopping text-white p-3"></a>
                        </li>
                    </ul>
                @endif
              </div>
             
             
            </div>
          </nav>

          <main class="py-0">
            <div class="">
                <div class="row">
                    <div class="col-sm-2  bg-dark">
                        <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                <li class="nav-item badge bg-secondary">
                                    <a href="{{route('item')}}" class="nav-link align-middle px-0">
                                        <i class="bi bi-diagram-2-fill fa-2x"></i> <span class="ms-1 d-none d-sm-inline text-white" style="font-size: 25px">Add item</span>
                                    </a>
                                </li>
                                <li class="nav-item badge bg-secondary">
                                    <a href="{{route('itemgroup')}}" class="nav-link align-middle px-0">
                                        <i class="bi bi-collection-fill  fa-2x"></i> <span class="ms-1 d-none d-sm-inline text-white" style="font-size: 25px">Add group</span>
                                    </a>
                                </li>
                        </div>
                    </div>
                    <div class="col-sm-10 mt-3  d-flex justify-content-center">
                        @yield('content')
                    </div>
                </div>
               
            </div>
          
          </main>
   
   
   
   
   
   
    </div>

   

</body>
</html>
