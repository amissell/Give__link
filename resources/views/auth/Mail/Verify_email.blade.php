
<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
</head>
<body>
    <h1>Hello, {{ $user->name }}</h1>
    <p>Thank you for registering! Please click the link below to verify your email address:</p>
    <a href="{{ url('Verify_email/'.$user->verification_token) }}">Verify Email</a>
</body>
</html>
