
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Primary Meta Tags -->
    <title>OTP</title>
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

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>

    <style>
        .main-logo
        {
            font-size: 22px !important;
            line-height: 30px;
            color: #FFF;
            font-weight: 600 !important;
        }
    </style>

    <style>
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
            <div class="text-left">
              <h2>
                 <a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>                 OTP verification
              </h2>
            </div>
          </div>
          <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-green-dark opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
          </div>
                      <div class="ms-3 me-3 alert alert-small rounded-s shadow-xl bg-green-dark s-alrt" role="alert">
              <span><i class="fa fa-check"></i></span>
              <strong>OTP sent successfully</strong>
              <button type="button" class="close color-white opacity-60 font-16" data-bs-dismiss="alert" aria-label="Close">&times;</button>
            </div>
                                <div class="card card-style">
    <div class="content mt-2 mb-0">
      <form class="mt-2" method="get" action="#">
        <input type="hidden" name="_token" value="S0pQqq83On2q9uFmFfo90ZPUURnudvbIcSYTcmtn">        
        <!-- <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
          <input type="number" class="form-control validate-text phone" id="phone" placeholder="Mobile" name="phone" value="9844043717" readonly required>
          <label for="phone" class="color-highlight">Mobile*</label>
        </div> -->
        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4">
          <input type="text" oninput="onlyNumeric(this)" maxlength="4" minlength="4" class="form-control validate-text phone" id="phone" placeholder="Enter OTP" name="otp" required>
          <label for="phone" class="color-highlight">OTP*</label>
        </div>
        <center>
          <input type="submit" class="btn btn-m mt-4 mb-4 btn-full bg-green-dark rounded-sm text-uppercase font-900" value="Submit">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://prism.bbmpgov.in/public/scripts/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://prism.bbmpgov.in/public/scripts/custom.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(".s-alrt").fadeTo(2000, 500).fadeOut(1000, function(){
          $(".s-alrt").fadeOut(1000);
        });
      });
    </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script>
    function onlyNumeric(e) {
      var inputElement = e;
      var inputValue = inputElement.value;
      var sanitizedValue = inputValue.replace(/[^0-9]/g, '');
      inputElement.value = sanitizedValue;
    }
  </script>
  </body>
</html>