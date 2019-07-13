<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('interface/admin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('interface/admin/plugins/iCheck/square/blue.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="{{ route('login') }}"><b>Hotel</b> Login</a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            {{-- <p class="login-box-msg">Sign in to start your session</p> --}}

            <form action="{{ route('login') }}" method="post"  aria-label="{{ __('Login') }}">
                {{ csrf_field() }}
                @if($errors->has('errorlogin'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{$errors->first('errorlogin')}}
                    </div>
                @endif
                <div class="form-group has-feedback">
                    <label for="email" class="col-sm-8 col-form-label">{{ __('E-Mail Address') }}</label>
                    <input 
                        id="email"
                        type="email" 
                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        placeholder="Email" 
                        name="email"
                        value="{{ old('email') }}"
                        required 
                        autofocus
                    >
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <label for="password" class="col-md-8 col-form-label ">{{ __('Password') }}</label>
                    <input 
                        id="password"
                        type="password" 
                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                        name="password" 
                        required 
                        placeholder="Password" 
                    >
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="form-group row mb-0">
                        <div class="col-md-8 ">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('interface/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('interface/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('interface/admin/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        })
    })
</script>
</body>
</html>
