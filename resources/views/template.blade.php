<!doctype html>
<html lang="en">
  <head>
    <title>ReadMe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">ReadMe</a>
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        @guest('admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.login') }}" class="nav-link">Login</a>
                        </li>
                        @else
                        @can('role',['admin'])
                            <li class="nav-item">
                                <a href="{{ route('post') }}" class="nav-link">Daftar Cerita</a>
                            </li>
                        @endcan
                        @can('role','admin')
                            <li class="nav-item">
                                <a href="{{ route('admin') }}" class="nav-link">Daftar Penulis</a>
                            </li>
                        @endcan
                        @can('role','editor')
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Jelajahi</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Fiksi Remaja</a> 
                                <a href="#" class="dropdown-item">Fiksi Ilmiah</a>
                                <a href="#" class="dropdown-item">Fiksi Umum</a>
                                <a href="#" class="dropdown-item">Fiksi Sejarah</a>
                                <a href="#" class="dropdown-item">Non-Fiksi</a>
                                <a href="#" class="dropdown-item">Fantasi</a>
                                <a href="#" class="dropdown-item">Comedy</a>
                                <a href="#" class="dropdown-item">Horor</a>
                                <a href="#" class="dropdown-item">Romantic</a>
                                <a href="#" class="dropdown-item">Petualangan</a>
                            </div>
                        </li>
                        @endcan
                        @can('role','editor')
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Tulis</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Buat Cerita Baru</a> 
                                <a href="#" class="dropdown-item">Cerita Saya</a>
                            </div>
                        </li>
                        @endcan
                        @can('role','operator')
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Jelajahi</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Fiksi Remaja</a> 
                                <a href="#" class="dropdown-item">Fiksi Ilmiah</a>
                                <a href="#" class="dropdown-item">Fiksi Umum</a>
                                <a href="#" class="dropdown-item">Fiksi Sejarah</a>
                                <a href="#" class="dropdown-item">Non-Fiksi</a>
                                <a href="#" class="dropdown-item">Fantasi</a>
                                <a href="#" class="dropdown-item">Comedy</a>
                                <a href="#" class="dropdown-item">Horor</a>
                                <a href="#" class="dropdown-item">Romantic</a>
                                <a href="#" class="dropdown-item">Petualangan</a>
                            </div>
                        </li>
                        @endcan
                        @can('role','operator')
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Daftar Bacaan</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Disukai</a> 
                                <a href="#" class="dropdown-item">Riwayat Baca</a>
                            </div>
                        </li>
                        @endcan
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Pengaturan</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item">Profil Saya</a>
                                <a href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="dropdown-item">Logout</a>
                                <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
        @yield('content')
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>