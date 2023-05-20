<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Stream | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
    <div class="container bg-light p-5 ">
        <div class="row ">
            <div class="col d-flex justify-content-center">
                <img src="{{url('/images/payment.jpg')}}" alt="payment" width="400">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-center fw-bold">Your payment is success!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button class="btn btn-primary">
                    <a href="{{ route('user.index') }}" class="text-white">Go Home</a>
                </button>
            </div>
        </div>
        
    </div>
  

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>
</html>
