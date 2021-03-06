<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('img/thunderbolts (1) 2.png')}}" type="image/icon type">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    {{-- <script src="{{asset('js/index.js')}}"></script> --}}
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div>
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="{{asset('img/thunderbolts (1) 2.png')}}" width="133" height="48">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->nama_lengkap }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="{{route('find')}}">Find Us <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('topUp')}}">Top Up <span class="sr-only"></span></a>
                </li> -->
                <!-- <li class="nav-item">
                         <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                         <a class="nav-link" href="#">Sign In</a>
                    </li> -->
                <!-- <li class="nav-item ml-4">
                         <a class="nav-link btn btn-success text-white" href="#">Sign Up</a>
                    </li> -->
            </ul>
        </div>
    </nav>

    <div class="container" style="height: 80vh;">
        <div class="row mt-5" style="height: 100%;">
            <div class="col d-flex flex-column justify-content-center">
                <img src="{{asset('img/charging-station 1.png')}}" width="400">
            </div>
            <div class="col d-flex flex-column justify-content-center">
                <h2 class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, est!</h2>
                <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit.<br /> Corporis labore
                    sapiente sed similique iure
                    assumenda inventore doloribus rem ab? Quasi optio sequi provident! Fuga quidem dicta veniam fugit
                    numquam
                    facilis?</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    @yield('scripts')
</body>

</html>