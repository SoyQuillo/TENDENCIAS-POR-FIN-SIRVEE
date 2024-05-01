@extends('layouts.applogin')

@section('content')

<div class="register-box" style="background: linear-gradient(to right, #DC241F, #FFD900);">
  <div class="card card-outline card-warning">
    <div class="card-header text-center">
      <a href="../../index2.html" class="text-danger h1 fs-1 font-family-sans-serif">E.D.S Terpel</a>
      <img class="col-8" src="https://portalcolombia.terpel.com/static/images/terpel_logo_og.png" alt="#">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="{{ route('register') }}" method="post">
      @csrf
        <div class="input-group mb-3">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder= "Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder= "Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder= "Confirmar">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              
            </div>
          </div>
          <!-- /.col -->
          <div class="row justify-content-center">
          <div class="col-6 ">
            <button type="submit" class="btn btn-danger text-warning btn-block">Registrar</button>
          </div>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
       
      </div>

      <div class="d-flex justify-content-center align-items-center">
      <a href="login" class="text-center text-secondary-emphasis ">Ya tengo cuenta</a>
      </div>
    </div>

    <!-- /.form-box -->
  </div><!-- /.card -->
</div>

@endsection
