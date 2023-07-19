<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tayo | {{ $title }}</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Tayo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard')?'active':'' }}" aria-current="page" href="/dashboard">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('input')?'active':'' }}" href="/input">Jadwal</a>
              </li><li class="nav-item">
                <a class="nav-link {{ Request::is('bus')?'active':'' }}" href="/bus">Bus</a>
              </li><li class="nav-item">
                <a class="nav-link {{ Request::is('supir')?'active':'' }}" href="/supir">Supir</a>
              </li></li><li class="nav-item">
                <a class="nav-link me-auto" href="/">Log Out</a>
              </li>
          </div>
        </div>
      </nav>
<div class="container p-3 bg-white">
    @yield('content')
</div>
    
</body>
</html>