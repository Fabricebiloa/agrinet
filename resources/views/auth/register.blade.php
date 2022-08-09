

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('style-auth/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('style-auth/css/style.css')}}">
</head>
<body>

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form" action="{{ route('register') }}">
                @csrf
                <h2>education appointment form</h2>
                <div class="form-group-1">
                    <input type="text" name="name" value="{{ old('name') }}" id="title" placeholder="nom" class="@error('name') is-invalid @enderror" required />
                    @error('name')
                        <span class="" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror



                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="Email" required />
                    @error('email')
                        <span class="" role="alert" style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input type="password"  class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="password" required />
                    @error('password')
                        <span class="" role="alert " style="color:red">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password-confirm" type="password" class="form-control" placeholder="confirm-password"  name="password_confirmation" required autocomplete="new-password">



                </div>


                <div class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Request an appointment" />
                </div>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('style-auth/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('style-auth/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
