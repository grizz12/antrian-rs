<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/home" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('data_pasien.create') }}" class="nav-link">Pasien Baru</a>
      </li>
    </ul>

    <ul class="navbar-nav ms-auto">
    @auth

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        {{auth()->user()->name}}
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li>
          <form action="/logout" method="post">
            @csrf
            <button type="submit" class="dropdown-item">
              <i class="bi bi-box-arrow-right"></i> Logout</a>
            </button>
          </form>
        </li>
      </ul>
    </li>
      
    @endauth
    
  </ul>
  

  </nav>