@extends('layouts.admin')

@section('content')

<div class="container">
    <!-- Profile Image -->

    <h1 align="center"><b>Profile</b></h1>
    <div class="card card-primary md-3 card-outline">
        <div class="card-body box-profile">
          {{-- <div class="text-center">
            <img class="profile-user-img img-fluid img-circle"
                 src="../../dist/img/user4-128x128.jpg"
                 alt="User profile picture">
          </div> --}}

          <h1 class="brand-text font-weight-light text-center"><b>Klinik</b><small>Sederhana</small></h1>
          <br>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Nama</b> <a class="float-right">{{Auth::user()->name}}</a>
            </li>
            <li class="list-group-item">
              <b>Email</b> <a class="float-right">{{Auth::user()->email}}</a>
            </li>
            <li class="list-group-item">
              <b>Password</b> <a class="float-right">{{Auth::user()->password}}</a>
            </li>
          </ul>

          <a href="/home" class="btn btn-primary btn-block"><b>Kembali</b></a>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
</div>

@endsection



