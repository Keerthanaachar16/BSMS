
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Primary Meta Tags -->
    <title>Registration</title>
    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="csrf-token" content="S0pQqq83On2q9uFmFfo90ZPUURnudvbIcSYTcmtn" />
    
    <link rel="manifest" href="{{ asset('_manifest.json') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('app/icons/icon-192x192.png') }}">
    <link rel="stylesheet" href="{{ asset('styles/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/css/fontawesome-all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">

    <style>
        .main-logo
        {
            font-size: 22px !important;
            line-height: 30px;
            color: #FFF;
            font-weight: 600 !important;
        }
    </style>

      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <style>
    label.color-highlight.profess-tag {
        opacity: 1;
        left: 23px !important;
        transform: translateX(-14px) !important;
        margin-left: 0px !important;
        position: absolute;
        font-size: 12px;
        transition: all 250ms ease;
        background-color: #FFF;
        z-index: 996;
        top: -11px;
        padding: 0px 5px;
    }
      .header{
          display:none;
      }
      .back-to-top{
          display : none;
      }
      #footer-bar {
          display:none;
      }
      .footer-card{
          bottom : 0px !important;
      }
  </style>
  </head>

  <body class="theme-light" data-highlight="grass">
    <div id="preloader">
      <div class="spinner-border color-highlight" role="status">
      </div>
    </div>
    <div id="page">
      <div class="page-content" style="padding-bottom:0px;">
        <div class="page-content" style="padding-bottom: 0px; transform: translateX(0px);">
          <div class="page-title page-title-small">
            <div class="col-12 ps-0 text-center">
              <img src="{{ asset('images/logo.png') }}" width="75" height="75" class="rounded-xl ">
            </div>
            <div class="text-center">
              <h2>
                                Registration
              </h2>
            </div>
          </div>
          <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-green-dark opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
          </div>
          <div class="card card-style">
            <div class="content mb-0 mt-1 mb-3">
                <form method="post" action="#" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="S0pQqq83On2q9uFmFfo90ZPUURnudvbIcSYTcmtn">        
                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                            <label for="name" class="color-highlight">Name</label>
                            <input type="text" class="form-control validate-name" id="name" required pattern="[A-Za-z\s]{3,}"  title="Please enter your name" placeholder="Enter name">
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                            <em>(Required)</em>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                            <label for="phone" class="color-highlight">Phone Number</label>
                            <input type="tel" class="form-control validate-name" id="phone" required pattern="\d{10}" maxlength="10" title="Please enter valid Phone Number" placeholder="Enter Phone Number">
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                            <em>(Required)</em>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                        <label for="email" class="color-highlight">Email</label>
                        <input type="email" class="form-control validate-name" id="email" placeholder="Enter the email" name="email" required title="Please EnterValid Email">
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(Required)</em>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                        <label for="address" class="color-highlight">Adress</label>
                        <textarea class="form-control validate-name" id="address" rows="2" required placeholder="Enter Your Address"></textarea>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        <em>(Required)</em>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                        <label for="password" class="color-highlight">Password</label>
                        <input type="password" class="form-control is-invalid " id="password" required minlength="6" placeholder=Password>
                        <div class="invalid-feedback" id="password"></div>
                        <em>(Required)</em>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                        <label for="confirmPassword" class="color-highlight">Confirm Password</label>
                        <input type="password" class="form-control is-invalid " id="confirmPassword" required placeholder=ConfirmPassword>
                        <div class="invalid-feedback" id="confirmPasswordFeedback"></div>
                        <em>(Required)</em>
                        </div>
        <center>
          <input id="submit_btn" type="submit" class="btn btn-m btn-full rounded-sm shadow-l bg-green-dark text-uppercase font-700 mt-4" value="Submit">
        </center>
      </form>
    </div>
  </div>
        </div>
        <div class="footer mb-80" >
  <div class="footer card card-style mx-0 mb-0">
    <div class="content mb-4">
      <div class="row justify-content-center mb-1">
        <div class="col-12 ps-0 footernemusub1">
          <a href="#" class="footer-title pt-4">Black Spot Monitoring System</a>
          <br>
          <div class="text-center" style="font-size: 14px;">
              Powered By 
              <!-- <br><img width="200" src="https://prism.bbmpgov.in/public/images/avatars/art_park.png" /> <br> -->
            </div>
            <br>
          <div class="text-center mb-3">
            <a href="#" target="_blank" class="icon icon-xs rounded-sm shadow-l me-1 bg-facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank" class="icon icon-xs rounded-sm shadow-l me-1 bg-twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://wa.me/919066798311" target="_blank" class="a-green icon icon-xs rounded-sm shadow-l me-1 bg-whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="#" target="_blank" class="icon icon-xs rounded-sm shadow-l me-1 bg-linkedin"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" target="_blank" class="icon icon-xs rounded-sm shadow-l me-1 bg-red-dark"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" class="back-to-top icon icon-xs rounded-sm shadow-l bg-highlight color-white"><i class="fa fa-arrow-up"></i></a>
          </div>
          <p class="boxed-text-l">For any technical support kindly contact through<br>WhatsApp message preferably <br> <a href="https://wa.me/919066798311" target="_blank">9066798311</a> </p>
        </div>
      </div>
    </div>
    <p class="footer-copyright pb-3 mb-1">Copyright  &copy; <a href="https://bbmp.gov.in/" target="__blank">McWare</a> <span id="copyright-year">2025</span>. All Rights Reserved.</p>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    </div>
  </div>
  <div class="footer-card card shape-rounded " style="height:230px">
    <div class="card-overlay bg-green-dark opacity-90"></div>
  </div>
</div>       </div>
    </div>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('scripts/bootstrap.min.js') }}"></script>
    <script src="{{ asset('scripts/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <!-- <script type="text/javascript">
      $(document).ready(function() {
        $(".s-alrt").fadeTo(2000, 500).fadeOut(1000, function(){
          $(".s-alrt").fadeOut(1000);
        });
      });
    </script> -->
      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
    document.querySelector("form").addEventListener("submit", function (e) {
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    let isValid = true;

    // Password length check
    if (password.length < 6) {
        document.querySelector("#password + .invalid-feedback").textContent = "Password must be at least 6 characters.";
        isValid = false;
    } else {
        document.querySelector("#password + .invalid-feedback").textContent = "";
    }

    // Confirm password match check
    if (password !== confirmPassword) {
        document.getElementById("confirmPasswordFeedback").textContent = "Passwords do not match.";
        isValid = false;
    } else {
        document.getElementById("confirmPasswordFeedback").textContent = "";
    }

    if (!isValid) {
        e.preventDefault(); 
    }
});
</script>
 
  </body>
</html>