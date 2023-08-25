<!doctype html>
<html lang="en">

<head>
    <title>Asri Single Window</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('images/asw.png') }}" type="image/icon type">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/multiselect-dropdown.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

   <style>
        .multiselect-dropdown {
            width: 100% !important;
        }
    </style>
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <h1><a href="{{route('home')}}" class="logo"> {{ Auth::user()->name }} Dashboard</a></h1>
            <ul class="list-unstyled components mb-5">

                @if (auth()->user()->role == 1)
                    <li>
                        <a href="{{ route('superAdminUsers') }}"><span class="fa fa-users mr-3"></span> Daftar Users</a>
                    </li>
                    <li>
                        {{-- <a href="{{ route('manageRole') }}"><span class="fa fa-gear mr-3"></span> Edit employee</a> --}}
                    </li>
                    <li>
                        <a href="{{ route('create') }}"> <span class="fa fa-user mr-3"></span> Input Karyawan</a>
                    </li>

                @elseif (auth()->user()->role == 2)
                <li>
                    <a href="{{ route('subAdminUsers') }}"><span class="fa fa-users mr-3"></span> Daftar Users</a>
                </li>
                @endif

                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                            class="fa fa-sign-out mr-3"></i>
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('space-work')
            <script src="{{ asset('resources/js/app.js') }}"></script>
        </div>
    </div>


</body>

</html>
