
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('style-auth/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('style-auth/css/style.css')}}">
</head>




    <body id="particles-js"></body>
    <div class="animated bounceInDown">
      <div class="container">
        <span class="error animated tada" id="msg"></span>
        <form method="POST" name="form1" class="box" onsubmit="return checkStuff()" action="{{ route('login') }}">
            @csrf
            <h4>Admin<span>Dashboard</span></h4>
          <h5>Sign in to your account.</h5>
            <input type="text"  placeholder="Email" autocomplete="off" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
            <i class="typcn typcn-eye" id="eye"></i>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Passsword" id="pwd" autocomplete="off">

            

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary" value="Sign in">
                        {{ __('Login') }}
                    </button>
                    <br/>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>




          </form>
            <a href="{{ route('register') }}" class="dnthave">Don’t have an account? Sign up</a>
      </div>
           <div class="footer">
          <span>Made with <i class="fa fa-heart pulse"></i> <a href="https://www.google.de/maps/place/Augsburger+Puppenkiste/@48.360357,10.903245,17z/data=!3m1!4b1!4m2!3m1!1s0x479e98006610a511:0x73ac6b9f80c4048f"><a href="https://codepen.io/lordgamer2354">By Anees Khan</a></span>
        </div>
    </div>
  <script src="{{asset('style-auth/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('style-auth/js/main.js')}}"></script>
</body>
</html>
