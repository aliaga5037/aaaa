<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <!-- Website CSS style -->
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <title>Admin</title>
  </head>
  <body>
    <div class="container">
      <div class="row main">
        <div class="panel-heading">
          <div class="panel-title text-center">
            <h1 class="title">Company Name</h1>
            <hr />
          </div>
        </div>
        <div class="main-login main-center">
          <form class="form-horizontal" method="post" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group">
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="cols-sm-2 control-label">Your Name</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" value="{{ old('name') }}" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                </div>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
              <label for="surname" class="cols-sm-2 control-label">Your Surname</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" value="{{ old('surname') }}" class="form-control" name="surname" id="surname"  placeholder="Enter your Name"/>
                </div>
                @if ($errors->has('surname'))
                  <span class="help-block">
                    <strong>{{ $errors->first('surname') }}</strong>
                  </span>
                  @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="cols-sm-2 control-label">Your E-mail</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  <input type="email" value="{{ old('email') }}" class="form-control" name="email" id="email"  placeholder="Enter your Name"/>
                </div>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
              </div>
            </div>
           
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
              <label for="username" class="cols-sm-2 control-label">Your Username</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                  <input type="text" value="{{ old('username') }}" class="form-control" name="username" id="username"  placeholder="Enter your Name"/>
                </div>
                @if ($errors->has('username'))
                  <span class="help-block">
                    <strong>{{ $errors->first('username') }}</strong>
                  </span>
                  @endif
              </div>
            </div>
            
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="cols-sm-2 control-label">Your Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password"  class="form-control" name="password" id="password"  placeholder="Enter your Name"/>
                </div>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <label for="password_confirmation" class="cols-sm-2 control-label">Confirm Password</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  <input type="password"  class="form-control" name="password_confirmation" id="password_confirmation"  placeholder="Enter your Name"/>
                </div>
                @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                  @endif
              </div>
            </div>

            <div class="form-group ">
              <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
            </div>
            <div class="login-register">
              <a href="{{ url('/login') }}">Login</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="/bootstrap/js/bootstrap.js"></script>