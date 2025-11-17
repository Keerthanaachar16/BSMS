<!DOCTYPE html>
<html>
<head>
    <title>New Complaint Assigned</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f0f2f5; margin: 0; padding: 20px;">
    <div style="max-width: 600px; background-color: #ffffff; margin: auto; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); border-top: 5px solid #5900ffff; border-bottom: 5px solid #5900ffff;">
        
        <h1 style="color: #5900ffff;; font-size: 28px; margin-bottom: 10px; text-align: center; font-weight: 700;">New Complaint Assigned</h1>
        
        <p style="font-size: 16px; color: #555;">Hello <strong>Official</strong>,</p>
        
        <p style="font-size: 16px; color: #555; line-height: 1.6;">A new complaint has been assigned to you. Please review the details below:</p>
        
        <div style="background-color: #f7f9fc; padding: 15px 20px;  border-radius: 6px; margin: 15px 0;">
            <p style="margin: 0; font-size: 16px; color: #333;"><strong>Complaint ID:</strong> {{ $complaint->id }}</p>
            <!-- <p style="margin: 0; font-size: 16px; color: #333;"><strong>Status:</strong> {{ $complaint->complaint_status }}</p> -->
        </div>
        
        <p style="font-size: 16px; color: #555;">Please login to the system to view more details and take necessary action.</p>
        
        <div style="text-align: center; margin-top: 25px;">
            <a href="{{ url('/login') }}" style="padding: 12px 25px; background-color: #774ddaff; color: #ffffff; text-decoration: none; font-size: 16px; font-weight: 600; border-radius: 6px; box-shadow: 0 3px 6px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                Login Now
            </a>
        </div>
        
        <p style="font-size: 14px; color: #999; margin-top: 25px; text-align: center;">This is an automated notification. Please do not reply to this email.</p>
    </div>
</body>
</html>