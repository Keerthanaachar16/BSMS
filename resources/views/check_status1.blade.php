<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Check Complaint Status</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f7f7f7;
    }

    .container {
      max-width: 600px;
      margin: 30px auto;
      background: white;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .logo {
      text-align: right;
      margin-bottom: 10px;
    }

    .logo img {
      width: 40px;
      height: 40px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
      display: block;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    .btn {
      margin-top: 15px;
      padding: 10px 20px;
      background: #007bff;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }

    .card {
      background: #f1f1f1;
      margin-top: 20px;
      padding: 15px;
      border-radius: 8px;
    }

    .card a {
      color: #007bff;
      text-decoration: none;
    }

    .footer {
      margin-top: 40px;
      text-align: center;
      color: #555;
    }

    .error {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="container">

    <div class="logo">
      <img src="{{ asset('images/logo.png') }}" alt="Logo">
    </div>

    <h2>Check Complaint Status</h2>

    <form method="GET" action="">
      <label>Complaint ID</label>
      <input type="text" name="complaint_id" placeholder="Enter Complaint ID" value="{{ request('complaint_id') }}">

      <button type="submit" class="btn">Search</button>
    </form>

    {{-- Show result if a complaint_id is submitted --}}
    @if(request()->has('complaint_id'))
        @if(request('complaint_id') == '10004')
            <div class="card">
              <p><strong>Complaint ID:</strong> 10004</p>
              <p><strong>Date:</strong> 23/07/25</p>
              <p><strong>Description:</strong> Garbage not collected from street no. 5 for two days.</p>
              <a href="{{ url('/complaint-details') }}">View Full Details</a>
            </div>
        @else
            <div class="card error">
              Result not found. Please enter a valid Complaint ID.
            </div>
        @endif
    @endif

    <div class="footer">
      Footer.
    </div>
  </div>

</body>
</html>