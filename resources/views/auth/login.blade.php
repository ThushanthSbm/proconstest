<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
/*author:starttemplate*/
/*reference site : starttemplate.com*/
body {
  background-position:center;
  background-size:cover;
  
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Yeseva One', cursive !important;
}

.container {
    padding: 90px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #C6EDEE!important;
    opacity: 1; /* Firefox */
    font-size:45px!important;
}
.form-login {
    background-color: #FBF1D3;
    padding-top: 10px;
    padding-bottom: 50px;
    padding-left: 50px;
    padding-right: 0px;
    border-radius: 5px;
    border-color:yellow;
    border-width: 15px;
    border-height: 20px;
    color:black;
    box-shadow:0 1px 0 green;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 18px;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Unique Login Form | Bootstrap Templates</title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-4 text-center">
            <h1 class='text-white'>SMS Login Form</h1>
        
              <div class="form-login"></br>
                <h4>Sign in to start your session</h4><br>
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row"style="margin-left:-30px;">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }} </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row"style="margin-left:-30px;">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                
                            </div>
                        </div><br>
                     
                        <div class="row">
          <div class="col-8" style="margin-left:-40px;">
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
        </div><br>

    
   

      <p class="mb-1" style="margin-right:50px;">
      @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"style="margin-left:-40px;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
      </p>
      <p class="mb-1">
        <a href="{{route('register')}}" class="text-right"style="margin-left:-50px;">  Register a new membership</a>
      </p>
    </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
    </br></br></br>
    <!--footer-->
    <div class="footer text-white text-center">
<a href="#">© 2023 Unique Login Form. All rights reserved | Design by Thushanth Sbm</a>
    </div>
    <!--//footer-->
</div>
</body>
</html>
