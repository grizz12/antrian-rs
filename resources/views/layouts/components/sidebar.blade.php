<!-- Brand Logo -->
<style>
  a:link {
    text-decoration: none;
  }
  
  a:visited {
    text-decoration: none;
  }
  
  a:hover {
    text-decoration: underline;
  }
  
  a:active {
    text-decoration: underline;
  }
  </style>
{{-- <a href="/home" class="brand-link">
  <img src="{{asset('images')}}/piksi ganesha hospital.png" alt="Piksi Ganesha Logo" class="brand-image" style="width:35px ;opacity: .8">
  <span class="brand-text font-weight-primary"><b>Piksi</b><small>Hospital</small></span>
</a> --}} 
<a href="/home" class="brand-link active">
  <img src="{{asset('images')}}/piksi ganesha hospital.png" alt="Piksi Ganesha Logo" class="brand-image" style="opacity: .8">
  <span class="brand-text font-weight-primary"><b>Piksi</b><small>Hospital</small></span>
</a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        @guest
        @else
        
        <a href="/profil" class="d-block">{{Auth::user()->name}}</a>
        @endguest
        
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline inline-dark">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">
          <h6 class="sidebar-headling text-muted">
            Halaman Utama
          </h6>
        </li>
        <li class="nav-item">
          <a href="/home" class="nav-link {{Request::is('home') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
            &nbsp;
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('data_pasien.create') }}" class="nav-link {{Request::is('data_pasien') ? 'active' : ' ' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
              <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
            </svg>
            &nbsp;
            <p>
              Pasien Baru
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Detail Pasien
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/pasien-show/{{ auth()->user()->id  }}" class="nav-link {{Request::is('data_pasien') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Detail Pasien</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/tiket-show/{{ auth()->user()->id  }}" class="nav-link {{Request::is('tiket') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Kunjungan & Tiket</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>

      @can('admin')
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">
          <h6 class="sidebar-headling text-muted">
            Detail Pasien
          </h6>
        </li>
        <li class="nav-item">
          <a href="{{ route('data_pasien.index') }}" class="nav-link {{Request::is('data_pasien') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
              <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
            </svg>
            &nbsp;
            <p>
             Data Pasien 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('tiket.index') }}" class="nav-link {{Request::is('tiket') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
              <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4-1v1h1v-1H4Zm1 3v-1H4v1h1Zm7 0v-1h-1v1h1Zm-1-2h1v-1h-1v1Zm-6 3H4v1h1v-1Zm7 1v-1h-1v1h1Zm-7 1H4v1h1v-1Zm7 1v-1h-1v1h1Zm-8 1v1h1v-1H4Zm7 1h1v-1h-1v1Z"/>
            </svg>
            &nbsp;
            <p>
              Kunjungan & Tiket
            </p>
          </a>
        </li>
      </ul>

      
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">
          <h6 class="sidebar-headling text-muted">
            Informasi Online User
          </h6>
        </li>
        <li class="nav-item">
          <a href="/online-user" class="nav-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
              <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
            </svg>
            &nbsp;
            <p>
             Data Pasien 
            </p>
          </a>
        </li>
      </ul>
      @endcan


      {{-- {{-- @can('admin') --}}
      {{-- ADMIN Authorization --}}
      {{-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">
          <h6 class="sidebar-headling text-muted">
            Informasi Data Pasien
          </h6>
        </li>
        <li class="nav-item">
          <a href="{{ route('data_pasien.index') }}" class="nav-link {{Request::is('data_pasien') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
              <path d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z"/>
            </svg>
            &nbsp;
            <p>
             Data Pasien 
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('tiket.index') }}" class="nav-link {{Request::is('tiket') ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
              <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4-1v1h1v-1H4Zm1 3v-1H4v1h1Zm7 0v-1h-1v1h1Zm-1-2h1v-1h-1v1Zm-6 3H4v1h1v-1Zm7 1v-1h-1v1h1Zm-7 1H4v1h1v-1Zm7 1v-1h-1v1h1Zm-8 1v1h1v-1H4Zm7 1h1v-1h-1v1Z"/>
            </svg>
            &nbsp;
            <p>
              Kunjungan & Tiket
            </p>
          </a>
        </li>
      </ul> --}}
      {{-- @endcan --}} 

    </nav>
    <!-- /.sidebar-menu -->
  </div>

  {{-- {{ Request::is('admin/data_pasien/tabel*') ? 'active' : '' }} --}}

  {{-- <li class="nav-item">
    <a href="{{ route('tiket.index') }}" class="nav-link {{Request::is('tiket') ? 'active' : '' }}">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-ticket-perforated-fill" viewBox="0 0 16 16">
        <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5Zm4-1v1h1v-1H4Zm1 3v-1H4v1h1Zm7 0v-1h-1v1h1Zm-1-2h1v-1h-1v1Zm-6 3H4v1h1v-1Zm7 1v-1h-1v1h1Zm-7 1H4v1h1v-1Zm7 1v-1h-1v1h1Zm-8 1v1h1v-1H4Zm7 1h1v-1h-1v1Z"/>
      </svg>
      &nbsp;
      <p>
        Kunjungan & Tiket
      </p>
    </a>
  </li> --}}