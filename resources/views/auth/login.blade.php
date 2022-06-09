<!doctype html>
<html lang="en">
  <head>
    <title>Login page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{ asset('loginform/css/style.css ') }}">

    </head>
    <body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <!-- <div class="col-md-6 text-center mb-2">
                <h2 class="heading-section"><b>Sign</b>In</h2>
            </div> -->
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Sign In</h3>
                    <form action="{{ route('login') }}" method="post" class="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" class="form-control rounded-left" id="email" placeholder="Email" name="email" :value="old('email')" autofocus required>
                        </div>
                        <div class="form-group">
                          <label for="">Password:</label>  
                          <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="current-password">
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                  <input type="checkbox" checked>
                                  <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                @if(Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password</a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('loginform/js/jquery.min.js ') }}"></script>
    <script src="{{ asset('loginform/js/popper.js ') }}"></script>
    <script src="{{ asset('loginform/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('loginform/js/main.js ') }}"></script>
    </body>
</html>

