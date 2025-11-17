<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Officials_Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <link rel="manifest" href="{{ asset('_manifest.json') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/icons/icon-192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/css/fontawesome-all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <style>
      .header, .back-to-top, #footer-bar { display: none; }
      .footer-card { bottom: 0px !important; }
      .label{
        color:green;
      }
      .text{
        color: #940ac1;
      }
    </style>
  </head>

  <body class="theme-light" data-highlight="grass">
    <div id="preloader">
      <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">
      <div class="page-content" style="padding-bottom:0px;">
        <div class="page-title page-title-small">
          <div class="text-center">
            <h2></h2>
          </div>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
          <div class="card-overlay bg-green-dark opacity-95"></div>
          <div class="card-overlay dark-mode-tint"></div>
          <div class="card-bg preload-img" data-src=""></div>
        </div>
        <div class="card card-style">
          <div class="content">
            <div class="col-12 ps-0 text-center">
              <img src="{{ asset('images/logo.png') }}" width="75" height="75" class="rounded-xl ">
            </div>
          </div>
          <div class="content mt-2 mb-0">
            <h2 class="mb-3 color-green-dark">Login</h2>
             @if(session('success'))
              <div class="alert text-center s-alrt" role="alert" style="
                background-color: #4ceba3ff;
                color: #0d5c37ff;
                border: 1px solid #3ae497ff;
                font-size: 16px;
                font-weight: 500;
                margin-top: 10px;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 128, 0, 0.1);
              ">
                <i class="fa fa-check-circle me-2"></i> {{ session('success') }}
              </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger" style="background-color: #ffe6e6; color: #a94442; padding: 10px; border: 1px solid #f5c6cb; border-radius: 5px;">
                    <strong>Try Again:</strong> {{ session('error') }}
                </div>
            @endif
              <form method="POST" action="{{route('officials_login')}}">
              @csrf
                <div class="input-style no-borders has-icon validate-field mb-4">
                  <i class="fa fa-user"></i>
                  <label for="phone" class="color-green-dark">Phone</label>
                  <input class="form-control validate-name" type="tel" name="phone" required pattern="[0-9]{10}" maxlength="10"
                  title="Please enter your phone number" placeholder="Enter your phone number">
                  <em>(required)</em>
                </div>
                <!-- <div class="input-style no-borders has-icon validate-field mb-4">
                  <i class="fa fa-lock"></i>
                  <label for="password" class="color-green-dark" >Password</label>
                  <input class="form-control validate-password" type="password" name="password" required placeholder="******">
                  <em>(required)</em>
                </div> -->
                <div class="input-style no-borders has-icon validate-field mb-4" style="position: relative;">
                      <i class="fa fa-lock"></i>
                      <label for="password" class="color-green-dark">Password</label>
                      <input id="password" class="form-control validate-password" type="password" name="password" required placeholder="********">
                      <em>(required)</em>

                      <!-- Eye Icon -->
                      <i class="fa fa-eye toggle-password" 
                        onclick="togglePassword()" 
                        style="position: absolute; right: 10px; top: 26px; cursor: pointer; color: #666;"></i>
                  </div>
                <center>
                  <input type="submit" class="btn btn-m mt-4 mb-4 btn-full bg-green-light rounded-sm text-uppercase font-900" value="Login">
                </center>
              </form>
          <div class="divider mt-4 mb-3"></div>          
              <div class="d-flex justify-content-end pb-3">
                
                <div><a href="{{url('/officials_forgot_password')}}" class="p-2 text rounded-sm">Forgot Password</a></div>
              </div>
            </div>
          </div>

          <div class="footer mb-80">
            <div class="footer card card-style mx-0 mb-0">
              <div class="content mb-4 text-center">
                <a href="#" class="footer-title pt-4">Black Spot Monitoring System</a>
                <div style="font-size: 14px;">
                  Powered By <br>
                 
                </div>
                <div class="text-center mb-3 mt-3">
                  <a href="#" class="icon icon-xs rounded-sm shadow-l bg-facebook"><i class="fab fa-facebook-f"></i></a>
                  <a href="#" class="icon icon-xs rounded-sm shadow-l bg-twitter"><i class="fab fa-twitter"></i></a>
                  <a href="" class="icon icon-xs rounded-sm shadow-l bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
                  <a href="#" class="icon icon-xs rounded-sm shadow-l bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#" class="icon icon-xs rounded-sm shadow-l bg-red-dark"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <p class="boxed-text-l">
                  For technical support WhatsApp <a href="https://wa.me/9844043717">9844043717</a>
                </p>
              </div>
                <p class="text-center pb-3 mb-1">Copyright &copy; <a href="https://bbmp.gov.in/" target="_blank">McWare</a> 2025</p>
            </div>
            <div class="footer-card card shape-rounded" style="height:230px">
              <div class="card-overlay bg-green-dark opacity-90"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- JS -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="{{ asset('scripts/bootstrap.min.js') }}"></script>
      <script src="{{ asset('scripts/custom.js') }}"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

      <script>
        $(document).ready(function() {
          $(".s-alrt").fadeTo(2000, 500).fadeOut(1000);
        });

        window.addEventListener("visibilitychange", function () {
          if (document.visibilityState === "visible") {
            window.location.reload();
          }
        });

        $(document).ready(function() {
          $(".s-alrt").fadeTo(3000, 500).slideUp(500, function(){
            $(".s-alrt").slideUp(500);
          });
        });
      </script>
      <script>
function togglePassword() {
    const passwordField = document.getElementById("password");
    const toggleIcon = document.querySelector(".toggle-password");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash"); // show slash when visible
    } else {
        passwordField.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye"); // show eye when hidden
    }
}
</script>
    </body>
</html>