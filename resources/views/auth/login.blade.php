<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Premier League | Log in</title>

  @include('includes.adminstyle')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{route('index')}}"><b>Fottball</b>League</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session <br>Default | username : admin@gmail.com / pw : admin</p>

      <form action="{{route('auth.login-proses')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror required" placeholder="Email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror required" placeholder="Password">
          @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
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

      <p class="mb-1">
        <a href="{{route('index')}}">Back to Index</a>
      </p>
      <p class="mb-0">
        <a href="{{route('auth.register')}}" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('gagal'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong! a.k.a utekmu mati',
        })
    </script>
@endif
@if ($message = Session::get('logout'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Logout',
            text: 'mwah',
            footer: 'Silahkan login kembali'
        })
    </script>
@endif
</body>
</html>
