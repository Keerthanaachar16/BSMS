<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Complaint</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
    }

    .container {
      max-width: 600px;
      margin: 20px auto;
      background: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 60px;
      height: 60px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    input[type="text"],
    select,
    textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 16px;
    }

    input[type="file"] {
      margin-top: 10px;
    }

    .image-preview {
      display: none;
      margin-top: 10px;
      position: relative;
    }

    .image-preview img {
      width: 100%;
      border-radius: 8px;
    }

    .image-preview button {
      position: absolute;
      top: 5px;
      right: 5px;
      background: red;
      color: #fff;
      border: none;
      border-radius: 50%;
      width: 25px;
      height: 25px;
      cursor: pointer;
      font-size: 16px;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      margin-top: 20px;
      cursor: pointer;
    }

    .footer {
      margin-top: 20px;
      text-align: center;
      font-size: 14px;
      color: #666;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

    <h2>Add Complaints</h2>

    <form method="POST" enctype="multipart/form-data">
      @csrf

      <label for="latitude">Latitude*</label>
      <input type="text" id="latitude" name="latitude" required readonly>

      <label for="longitude">Longitude*</label>
      <input type="text" id="longitude" name="longitude" required readonly>

      <label for="ward">Ward*</label>
      <select name="ward" id="ward" required>
        <option value="">-- Select Ward --</option>
        <option value="Ward 1">Ward 1</option>
        <option value="Ward 2">Ward 2</option>
        <option value="Ward 3">Ward 3</option>
        <!-- Add more wards -->
      </select>

      <label for="image">Image*</label>
      <input type="file" accept="image/*" capture="environment" id="image" name="image" onchange="previewImage(event)" required>

      <div class="image-preview" id="imagePreview">
        <img id="previewImg" src="#" alt="Captured Image">
        <button type="button" onclick="deleteImage()">×</button>
      </div>

      <label for="remarks">Remarks / Description</label>
      <textarea name="remarks" id="remarks" rows="3" placeholder="Enter description..."></textarea>

      <button type="submit" class="submit-btn">Submit</button>
    </form>

    <div class="footer">
      Footer
    </div>
  </div>

  <script>
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