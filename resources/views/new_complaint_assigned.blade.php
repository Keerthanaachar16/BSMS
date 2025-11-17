<!DOCTYPE html>
<html>
<head>
    <title>New Complaint Assigned</title>
</head>
<body>
    <h2>New Complaint Assigned</h2>
    <p>Hello Official,</p>
    <p>A new complaint has been assigned to you.</p>
    <p><strong>Complaint ID:</strong> {{ $complaint->id }}</p>
    <p><strong>Status:</strong> {{ $complaint->complaint_status }}</p>
    <p>Please login to the system to view more details.</p>
</body>
</html>