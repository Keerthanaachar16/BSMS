<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts and CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-1.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <style>
        
        .register-card {
            max-width: 500px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
        }
        .logo {
            width: 60px;
        }
        
    </style>
</head>
<body>

<div class="register-card">
    <div class="text-center mb-4">
        <!-- <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo"> -->
         <p><b>Black Spot Monitoring System</b></p>
        <h4 class="mt-2">Registration</h4>
    </div>

    <form id="registerForm" novalidate>
         <div class="text-center mb-4">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" required pattern="[A-Za-z\s]{3,}">
            <div class="invalid-feedback">Enter a valid name (letters only).</div>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phone" required pattern="\d{10}" maxlength="10">
            <div class="invalid-feedback">Enter a valid phone number.</div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
            <div class="invalid-feedback">Enter a valid email address.</div>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" rows="2" required></textarea>
            <div class="invalid-feedback">Address is required.</div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" required minlength="6">
            <div class="invalid-feedback">Password must be at least 6 characters.</div>
        </div>

        <div class="mb-3">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="confirmPassword" required>
            <div class="invalid-feedback" id="confirmPasswordFeedback">Please confirm your password.</div>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
   <!-- Social Login -->
            <div class="form-group mt-4 text-center">
              <ul class="d-flex justify-content-center gap-3">
                <li><a href="https://www.linkedin.com" target="_blank"><i data-feather="linkedin"></i></a></li>
                <li><a href="https://twitter.com" target="_blank"><i data-feather="twitter"></i></a></li>
                <li><a href="https://www.facebook.com" target="_blank"><i data-feather="facebook"></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i data-feather="instagram"></i></a></li>
              </ul>
            </div>
            <footer class="text-center"><b>Copyrights@Mcware</b></footer>
         
</div>
<script>
    const form = document.getElementById('registerForm');
    const password = document.getElementById('password');
    const confirmPassword = document.getElementById('confirmPassword');
    const confirmPasswordFeedback = document.getElementById('confirmPasswordFeedback');

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        let isValid = true;

        if (password.value !== confirmPassword.value) {
            confirmPassword.classList.add('is-invalid');
            confirmPasswordFeedback.textContent = "Passwords do not match.";
            isValid = false;
        } else {
            confirmPassword.classList.remove('is-invalid');
        }

        if (!form.checkValidity()) {
            isValid = false;
        }

        form.classList.add('was-validated');

        if (isValid) {
            alert("Registration successful.");
            form.reset();
            form.classList.remove('was-validated');
        }
    });
</script>
<!-- JS Scripts -->
  <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>