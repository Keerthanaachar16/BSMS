<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Login Credentials</title>
</head>
<body>
    <h3>Hello {{ $name }},</h3>
    <p>Your account has been created successfully.</p>

    <p><strong>Login Details:</strong></p>
    <ul>
        <!-- <li>Email: {{ $email }}</li> -->
        <li>Phone: {{ $phone }}</li>
        <li>Password: {{ $password }}</li>
    </ul>

    <p>Please keep this information safe and change your password after logging in.</p>

    <br>
    <p>Regards,<br>Black Spot Monitoring Team</p>
</body>
</html>