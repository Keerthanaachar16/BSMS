<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Fonts and CSS -->
     <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/bootstrap.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <style>
        .card-box {
            max-width: 450px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="card-box text-center">
    <img src="{{ asset('images/logo.png') }}" width="60" alt="Logo" class="mb-3">
     <p><b>Black Spot Monitoring System</b></p>
    <h4>Reset Password</h4>

    <form id="resetForm">
        <div class="mb-3 text-start">
            <label for="newPassword" class="form-label">New Password</label>
            <input type="password" id="newPassword" class="form-control" required minlength="6">
        </div>

        <div class="mb-3 text-start">
            <label for="confirmPassword" class="form-label">Confirm Password</label>
            <input type="password" id="confirmPassword" class="form-control" required>
            <div class="invalid-feedback" id="confirmPasswordFeedback">Passwords must match.</div>
        </div>

        <div class="mb-3 d-grid">
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
    const form = document.getElementById('resetForm');
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        const p1 = document.getElementById('newPassword');
        const p2 = document.getElementById('confirmPassword');
        const feedback = document.getElementById('confirmPasswordFeedback');

        if (p1.value !== p2.value) {
            p2.classList.add('is-invalid');
            feedback.textContent = "Passwords do not match.";
        } else {
            p2.classList.remove('is-invalid');
            alert("Password reset successful.");
            form.reset();
        }
    });
</script>
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
  <script src="{{ asset('assets/js/config.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>