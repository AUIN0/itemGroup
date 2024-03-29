<!doctype html >
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
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-lg bg-dark ">
            <div class="container-fluid">
              <a class="navbar-brand text-white" href="#"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-white" style="font-size: 25px" aria-current="page" href="{{ route('showGroup') }}">Home</a>
                    </li>
                 </ul>

                 <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link active text-white" style="font-size: 25px">About</a>
                  </li>
                 </ul>

                 <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="{{route('checkout')}}">
                      <i class="bi bi-cart-fill text-white p-2 h3""></i><span class="badge bg-danger p-1">{{Session::get('countitem')}}</span>
                    </a>
                  </li>
                 </ul>
              </div>
             
              <div class="collapse navbar-collapse" >
                <ul class="navbar-nav fs-3 text-center">
                    <li class="nav-item">
                      <h3 class="nav-link active text-white" aria-current="page" href="#" style="font-size: 35px;">Shopmania</h3>
                    </li>       
                  </ul>
              </div>
             
              <div>
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
                      </ul>
                    @endif
                  </div>
              </div>
            </div>
          </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
