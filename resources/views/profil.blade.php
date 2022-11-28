@extends('layouts.admin')

@section('content')

<div class="container">
    <!-- Profile Image -->

    <div class="card card-primary md-3 card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <p class="text-center" style="font-size: 50px"><b>Piksi</b><small>Hospital</small></p>
            <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>

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



