<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bagian Teknik | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="main d-flex flex-column justify-content-between">
        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Bagian Teknik</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
        <div class="body-content h-100">
            <div class="row g-0 h-100">
                <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">
                        @if (Auth::user()->role_id == 1)
                            <a href="dashboard" @if(request()->route()->uri == 'dashboard') class="active" @endif>Dashboard</a>
                            <a href="tickets" @if(request()->route()->uri == 'tickets') class="active" @endif>Tickets</a>
                            <a href="summary" @if(request()->route()->uri == 'summary') class="active" @endif>Summary</a>
                            <hr>    
                            <p class="text-center">Data Master</p>
                            <a href="user" @if(request()->route()->uri == 'user') class="active" @endif>Data User</a>
                            <a href="teknik" @if(request()->route()->uri == 'teknik') class="active" @endif>Data Teknisi</a>
                            <a href="objek" @if(request()->route()->uri == 'objek' || request()->route()->uri == 'add-objek' || request()->route()->uri == 'deleted-objek' || request()->route()->uri == 'update-object/{slug}' || request()->route()->uri == 'delete-object/{slug}') class="active" @endif>Data Objek</a>
                            <a href="lokasi" @if(request()->route()->uri == 'lokasi') class="active" @endif>Data Lokasi</a>
                            <hr>
                            <a href="logout">Logout</a>
                        @elseif (Auth::user()->role_id == 2)
                            <a href="home" @if(request()->route()->uri == 'home') class="active" @endif>Dashboard</a>
                            <a href="tickets" @if(request()->route()->uri == 'tickets') class="active" @endif>Tickets</a>
                            <hr>
                            <a href="logout">Logout</a>
                        @else
                            <a href="teknisi" @if(request()->route()->uri == 'teknisi') class="active" @endif>Dashboard</a>
                            <a href="tickets" @if(request()->route()->uri == 'tickets') class="active" @endif>Tickets</a>
                            <hr>
                            <a href="logout">Logout</a>
                        @endif
                </div>
                <div class="content p-4 col-lg-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>