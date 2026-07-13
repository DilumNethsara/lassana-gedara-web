<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP Verification</title>
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f7fa;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            background-color: #4CAF50;
            padding: 20px;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
            text-align: center;
        }
        .otp {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #888;
            margin-top: 20px;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
            <h2>OTP Verification</h2>
        </div>
        <div class="content">
            <p>Hello,</p>
            <p>Thank you for signing in. To complete your login process, please use the One-Time Password (OTP) below:</p>
            <p class="otp">{{ $otp }}</p>
            <p>This OTP is valid for the next 1 minute. Please do not share it with anyone.</p>
        </div>
        <div class="footer">
            <p>If you did not request this, please ignore this email.</p>
            <p>Do not reply to this email.</p>
        </div>
    </div>

</body>
</html>
