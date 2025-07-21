<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>List of Complaints</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f1f1f1;
    }

    .container {
      max-width: 800px;
      margin: 20px auto;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      padding: 20px;
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 60px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .tabs {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .tab {
      padding: 10px 25px;
      border: 1px solid #ccc;
      background-color: #eee;
      cursor: pointer;
      border-radius: 5px;
      margin: 0 5px;
      font-weight: bold;
    }

    .tab.active {
      background-color: #007BFF;
      color: white;
    }

    .complaint-card {
      border: 1px solid #ccc;
      border-radius: 10px;
      padding: 15px;
      margin-bottom: 15px;
      position: relative;
      background-color: #f9f9f9;
    }

    .complaint-card .status {
      position: absolute;
      top: 15px;
      right: 15px;
      padding: 5px 10px;
      border-radius: 12px;
      font-size: 13px;
      font-weight: bold;
      color: white;
     
    }

    .status-open {
      background-color: green;
    }

    .status-closed {
      background-color: red;
    }

    .status-progress {
      background-color: orange;
    }

    .footer {
      text-align: center;
      margin-top: 20px;
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

    <h2>List of Complaints</h2>

    <div class="tabs">
      <div class="tab active" onclick="filterComplaints('open')">Open</div>
      <div class="tab" onclick="filterComplaints('closed')">Closed</div>
    </div>

    <div id="complaintList">
     <div class="complaint-card" data-status="open">
        <div><strong>Complaint ID:</strong> C001</div>
        <div><strong>Date:</strong> 2025-07-17</div>
        <div><strong>Description:</strong> Streetlight not working</div>
        <div class="status status-open">Open</div>
      </div>
    
     <a href="{{url('/complaints_details1')}}" style="text-decoration:none; color:inherit;">
      <div class="complaint-card" data-status="closed">
        <div><strong>Complaint ID:</strong> C002</div>
        <div><strong>Date:</strong> 2025-07-10</div>
        <div><strong>Description:</strong> Water leakage issue resolved</div>
        <div class="status status-closed">Closed</div>
      </div>
      </a>

        <a href="{{url('/complaints_details1')}}" style="text-decoration:none; color:inherit;">
      <div class="complaint-card" data-status="progress">
        <div><strong>Complaint ID:</strong> C003</div>
        <div><strong>Date:</strong> 2025-07-15</div>
        <div><strong>Description:</strong> Garbage collection delayed</div>
        <div class="status status-progress">In Progress</div>
      </div>
      </a>
    </div>


    <div class="footer">© 2025 Complaint Portal</div>
  </div>

  <script>
    function filterComplaints(status) {
      const cards = document.querySelectorAll('.complaint-card');
      const tabs = document.querySelectorAll('.tab');

      // Toggle tab styling
      tabs.forEach(tab => tab.classList.remove('active'));
      if (status === 'open') tabs[0].classList.add('active');
      else tabs[1].classList.add('active');

      // Show/hide complaints
      cards.forEach(card => {
        const cardStatus = card.getAttribute('data-status');
        if (status === 'open') {
          card.style.display = (cardStatus === 'open' || cardStatus === 'progress') ? 'block' : 'none';
        } else if (status === 'closed') {
          card.style.display = (cardStatus === 'closed') ? 'block' : 'none';
        }
      });
    }

    // Load open tab by default
    window.onload = function () {
      filterComplaints('open');
    };
  </script>

</body>
</html>