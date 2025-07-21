
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Primary Meta Tags -->
    <title>Add_Complaints</title>
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
      
      .back-to-top{
          display : none;
      }
      #footer-bar {
          display:none;
      }
      .footer-card{
          bottom : 0px !important;
      }
      /* Sidebar Styles */
    #profileSidebar {
        position: fixed;
        top: 0;
        right: -250px;
        width: 250px;
        height: 100%;
        background-color: #fff;
        box-shadow: -2px 0 8px rgba(0, 0, 0, 0.3);
        transition: right 0.4s ease-in-out;
        z-index: 999;
        padding: 20px;
    }

    #profileSidebar.active {
        right: 0;
    }

    .profile-toggle-btn img {
        width: 100%;
        height: auto;
    }
    .close-btn{
      position:absolute;
      top:10px;
      right:15px;
      font-size:22px;
      font-weight:bold;
      cursor:pointer;
      color:#333;
    }
    .close-btn:hover{
      color:#ff0000;
    }
   
    .span1 .text-danger{
      position:absolute;
      margin-left:0;
      color:red !important;
      opacity:0;
      
    }
    
      
  </style>
  
  </head>

  <body class="theme-light" data-highlight="grass">
    <div id="preloader">
      <div class="spinner-border color-highlight" role="status">
      </div>
    </div>
    <div id="page">
         <div class="page-title page-title-small">
                <h2>
                    <a href="{{ url('/dashboard') }}" data-back-button="" style="padding-right: 5px;"><i class="fa fa-arrow-left" ></i></a>
                    <span class="me-2 fw-bold">Add_Complaints</span>
  
                </h2>
                <a href="#" data-menu="menu-main" class="bg-green-dark shadow-xl preload-img entered loaded"
                    data-src="images/profile.jpeg" data-ll-status="loaded" onclick="toggleProfileSidebar()"
                    style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY6qtMj2fJlymAcGTWLvNtVSCULkLnWYCDcQ&s');" ></a>
            </div>
          <div class="card header-card shape-rounded" data-card-height="250">
            <div class="card-overlay bg-green-dark opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src=""></div>
          </div>
         
  <div class="container py-4">
  <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
         <span class="me-2 fw-bold">{{ Auth::user()->name ?? 'User Name' }}</span>
<!-- Sidebar Content -->
<div id="profileSidebar">
  <div class="close-btn" onclick="closeProfileSidebar()">X</div>
    <div class="text-center mb-3">
        <img src="{{ asset('images/logo.png') }}" width="50" class="mb-2">
        <h5 class="fw-bold mb-0">{{ Auth::user()->name ?? 'User Name' }}</h5>
    </div>
    <hr>
    <ul class="list-unstyled">
        <li class="mb-2"><a href="{{ url('/dashboard') }}" class="text-decoration-none color-green-dark fs-6">Dashboard</a></li>
        <li class="mb-2"><a href="{{ url('/profile_edit') }}" class="text-decoration-none color-green-dark fs-6">Edit</a></li>
        <li>
            <form action="{{ url('') }}" method="#">
                @csrf
                <button class="btn btn-link text-decoration-none p-0 color-green-dark fs-6">Logout</button>
            </form>
        </li>
    </ul>
</div>
    </div>

    <div class="card card-style">
            <div class="content mb-0 mt-1 mb-3">
                <form method="post" action="#" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="S0pQqq83On2q9uFmFfo90ZPUURnudvbIcSYTcmtn">        
                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                            <label for="latitude" class="color-green-dark">Latitude<span1 class="text-danger">*</span1></label>
                            <input type="text" id="latitude" name="latitude" required readonly>
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                            <label for="longitude" class="color-green-dark">Longitude<span1 class="text-danger">*</span1></label>
                            <input type="text" id="longitude" name="longitude" required readonly>
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                        <label for="ward" class="color-green-dark">Ward<span1 class="text-danger">*</span1></label>
                        <select name="ward" id="ward" required>
                            <option value="">Select Ward</option>
                            <option value="Ward 1">Ward 1</option>
                            <option value="Ward 2">Ward 2</option>
                            <option value="Ward 3">Ward 3</option>
                            <!-- Add more wards -->
                        </select>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                          <label for="image" class="color-green-dark">Image<span1 class="text-danger">*</span1></label>
                            <input type="file" accept="image/*" capture="environment" id="image" name="image" onchange="previewImage(event)" required>
                            <div class="image-preview" id="imagePreview">
                            <!-- <img id="previewImg" src="#" alt="Captured Image" width="250" height="250" >
                            <button type="button" onclick="deleteImage()">×</button> -->
                            </div>
                        <i class="fa fa-times disabled invalid color-red-dark"></i>
                        <i class="fa fa-check disabled valid color-green-dark"></i>
                        </div>

                        <div class="input-style input-style-always-active has-borders no-icon validate-field mb-4 mt-4">
                            <label for="remarks" class="color-green-dark">Remarks / Description</label>
                            <textarea name="remarks" id="remarks" rows="3" placeholder="Enter description..."></textarea>
                            <i class="fa fa-times disabled invalid color-red-dark"></i>
                            <i class="fa fa-check disabled valid color-green-dark"></i>
                        </div>
                        <center>
                        <input id="submit_btn" type="submit" class="btn btn-m btn-full rounded-sm shadow-l bg-green-dark text-uppercase font-700 mt-4" value="Submit">
                        </center>
                          
                </form>
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
          <p class="boxed-text-l">For any technical support kindly contact through<br>WhatsApp message preferably <br> <a href="https://wa.me/9844043717" target="_blank">9844043717</a> </p>
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> 
    <script>
    function toggleProfileSidebar() {
        document.getElementById("profileSidebar").classList.toggle("active");
    }
    function closeProfileSidebar() {
        document.getElementById("profileSidebar").classList.remove("active");
    }
    // Get location automatically
    window.onload = function() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          document.getElementById("latitude").value = position.coords.latitude;
          document.getElementById("longitude").value = position.coords.longitude;
        }, function(error) {
          alert("Unable to fetch location. Please enable GPS.");
        });
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    };

    // Image preview
    function previewImage(event) {
      const input = event.target;
      const preview = document.getElementById('previewImg');
      const imagePreview = document.getElementById('imagePreview');

      if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          imagePreview.style.display = "block";
        };
        reader.readAsDataURL(input.files[0]);
      }
    }

    // Delete captured image
    function deleteImage() {
      const imageInput = document.getElementById('image');
      const preview = document.getElementById('previewImg');
      const imagePreview = document.getElementById('imagePreview');

      imageInput.value = "";
      preview.src = "#";
      imagePreview.style.display = "none";
    }
</script>
  </body>
</html>