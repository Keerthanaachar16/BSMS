<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Zeta admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Zeta admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="https://bbmpgov.org/public/theme/images/favicon-icon.png" type="image/x-icon">
    <link rel="shortcut icon" href="https://bbmpgov.org/public/theme/images/favicon-icon.png" type="image/x-icon">
    <title>Login </title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
        rel="stylesheet">

        <!-- Fonts and CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/font-awesome.css')}}">
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/icofont.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-1.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/scss/pages/login.scss') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<style>
.responsive-form{
    width:100%;
    max-width:400px;
}

.footer{
    color:black;
}
</style>
<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-bar"></div>
            <div class="loader-ball"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
<section>
        <div class="container-fluid">
            <div class="row m-0">

                <div class="col-lg-12 col-sm-12">
                    <div class="login-card p-3" style="background-color:white;height:auto">
                        <div class="theme-form col-md-9 p-4 shadow"
                            style="border:2px solid #00000047;border-radius: 10px;">

                            <div class="d-flex row align-items-center">
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="d-flex flex-row gap-1 align-items-center justify-content-around">
                                        <img src="https://bbmpgov.org/public/theme/images/karnataka.png" width="15%;" alt="">

                                        <h6 class="text-dark fw-bold text-center">Black Spot Monitoring System</h6>
                                         <img src="https://bbmpgov.org/public/theme/images/logo.png" width="15%;" alt="">
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">
                                    <h4 class="text-center" style="color:#2a1570;">Reset_Password</h4>
                                    <h5 class="text-start mb-3 text-dark mt-5 mb-2 fs-5"></h5>
                                    <form class="theme-form login-form responsive-form"  method="GET"  action="" onsubmit="event.preventDefault(); validatePasswords();">
                                        <input type="hidden" name="_token" value="z5IFaPDInut17Pb4nT4ucL8wUMgpKKwDaQWPUZV0" autocomplete="off">                                        
                                        <div class="form-group">
                                            <label>New Password</label>
                                            <input type="password" id="newPassword" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm New Password</label>
                                            <input type="password" id="confirmPassword" class="form-control" required>
                                            <small id="errorText" class="text-danger d-none">Passwords do not match</small>
                                        </div>
                                        <div class="text-end mt-3">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
          
                                </div>
                                <footer class="text-center mt-5">
                                    <p class="mb-0 text-muted" style="font-size:14px;">Copyrights@McWare</p>
                                </footer>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
         <!-- Success Popup -->
        <div id="successPopup" class="position-fixed top-50 start-50 translate-middle bg-success text-white p-3 rounded shadow d-none" style="z-index: 1050;">
            Password Changed Successfully!
        </div>
        
    </section>
   
<!-- JS Scripts -->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
    function togglePassword() {
        const passwordInput = document.getElementById("password");
        const toggleIcon = document.getElementById("toggleIcon");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        }
    }

    function validatePasswords() {
    const password = document.getElementById("newPassword").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const errorText = document.getElementById("errorText");

    if (password !== confirmPassword) {
        errorText.classList.remove("d-none");
    } else {
        errorText.classList.add("d-none");
        showSuccess();
    }
}

function showSuccess() {
    const popup = document.getElementById('successPopup');
    popup.classList.remove('d-none');
    setTimeout(() => {
        popup.classList.add('d-none');
    }, 2500);
}
    </script>
    

</body>

</html>