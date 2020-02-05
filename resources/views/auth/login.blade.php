@extends('layouts.app')

<link href="{{asset('assets/backend/css/bootstrap.min.css" rel="stylesheet')}}">
  <!-- bootstrap theme -->
  <link href="{{asset('assets/backend/css/bootstrap-theme.css" rel="stylesheet')}}">
  <!--external css-->
  <!-- font icon -->
  <link href="{{asset('assets/backend/css/elegant-icons-style.css" rel="stylesheet')}}"/>
  <link href="{{asset('assets/backend/css/font-awesome.css" rel="stylesheet')}}" />
  <!-- Custom styles -->
  <link href="{{asset('assets/backend/css/style.css" rel="stylesheet')}}">
  <link href="{{asset('assets/backend/css/style-responsive.css" rel="stylesheet')}}"/>

@section('content')
<body style="background-image: url(backend/assets/img/avatars/background.jpg); background-size:100%">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card" style="background-color: transparent;border-color: transparent;">
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                                   
                    <h4 style="font-style: italic">Silahkan Masukan Email Dan Password Dengan Benar!!</h4>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-6"> 
                                <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                 <a class="btn btn-link" style="color:blue" href="{{ route('register') }}">
                                    Register
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
