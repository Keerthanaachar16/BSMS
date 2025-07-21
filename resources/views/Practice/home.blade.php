<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Simple Page</title>
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
  <h1>Hello Laravel</h1>
  <p id="msg">Click the button to change this text.</p>
  <button onclick="changeText()">Click Me</button>
  <img src="{{ asset('images/flower.jpg') }}" alt="Flower" width="200">
  <script src="{{ asset('script.js') }}"></script>
</body>
</html>