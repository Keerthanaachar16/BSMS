<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- Fonts and CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-1.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>

<body>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-12">
        <div class="login-card">
          <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="text-center my-3">
              <img src="{{ asset('images/logo.png') }}" width="60" alt="Logo" class="mx-auto">
              <p>Black Spot Monitoring System</p>
            </div>
            <h4>Login</h4>
            <h6>Welcome back! Log in to your account.</h6>

            <!-- Phone Number -->
            <div class="form-group">
              <label>Phone Number</label>
              <div class="input-group">
                <input class="form-control" type="tel" name="phone" required pattern="[0-9]{10}" maxlength="10"
                  title="Please enter your phone number" placeholder="Enter your phone number">
              </div>
            </div>

            <!-- Password -->
            <div class="form-group">
              <label>Password</label>
              <div class="input-group">
                <input class="form-control" type="password" name="password" required placeholder="******">
              </div>
            </div>

            <!--  Forgot -->
            <div class="form-group d-flex justify-content-between align-items-center">
              <div class="reg">
              <a class="ms-2" href="{{ route('register') }}">Registration</a>
            </div>
              <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
            </div>

            <!-- Login Button -->
            <div class="form-group">
              <button class="btn btn-primary btn-block w-100" type="submit">Log in</button>
            </div>

            <!-- Social Login -->
            <div class="login-social-title">
              <h5>Sign in with</h5>
            </div>
            <div class="form-group">
              <ul class="login-social">
                <li><a href="https://www.linkedin.com" target="_blank"><i data-feather="linkedin"></i></a></li>
                <li><a href="https://twitter.com" target="_blank"><i data-feather="twitter"></i></a></li>
                <li><a href="https://www.facebook.com" target="_blank"><i data-feather="facebook"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i data-feather="instagram"></i></a></li>
              </ul>
            </div>
            <footer class="text-center"><b>Copyrights@Mcware</b></footer>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- JS Scripts -->
  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>