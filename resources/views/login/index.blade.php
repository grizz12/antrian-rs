<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Piksi Hospital || {{$title}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">

  <link rel="icon" type="image/x-icon" href="/images/Politeknik_Piksi_Ganesha_Bandung.png">

</head>
<style>
.card-img-left {
  width: 50%;
  /* Link to your background image using in the property below! */
  background: scroll center url('images/doctror.png');
  background-size: 450px;
}

.title {
  font-size: 50;
  color: blueviolet;
}


.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
}
  </style>
<body class="hold-transition login-page">
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('images')}}/Politeknik_Piksi_Ganesha_Bandung.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif 
      
  @if ($message = Session::get('LoginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ $message }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>

          <div class="card-body p-4 p-sm-5 align-top">
            <div class="title" align="center">
              <h2><b>Piksi</b><small>Hospital</small></h2>
                <img src="{{asset('images')}}/piksi ganesha hospital.png" width="200px" alt="">
                <br><br> 
              </div>
              <p align="center">Sign in</p>
                <form action="/login" method="post">
                @csrf
                  <div class="input-group mb-3">
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" 
                    velue="{{old('email')}}" autofocus required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                      </div>
                    </div>
                    @error('email')
                      <div class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </div>
                  @enderror
                  </div>
                  <div class="input-group mb-3">
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                    @error('password')
                      <div class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </div>
                  @enderror
                  </div>
                  <div class="row">
                    <div class="col-8">
                      <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                          Remember Me
                        </label>
                      </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                  </div>
                </form>
          
                <!-- /.social-auth-links -->
                <p class="mb-0">
                  <a href="/register" class="text-center">Register a new membership</a>
                </p>
              </div>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  

<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
</body>
</html>