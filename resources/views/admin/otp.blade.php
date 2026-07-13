<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lassana Gedara — OTP Verification</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #f8f7f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .otp-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
            text-align: center;
        }
        h2 {
            color: #800000;
            margin-bottom: 8px;
            font-size: 24px;
        }
        p {
            color: #666;
            font-size: 14px;
            margin-bottom: 24px;
        }
        .email-display {
            font-weight: bold;
            color: #333;
        }
        label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
            text-align: left;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #e2dfd9;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 18px;
            letter-spacing: 4px;
            text-align: center;
            margin-bottom: 20px;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #800000;
        }
        button {
            width: 100%;
            padding: 12px;
            background: #800000;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #b30000;
        }
        .error-msg {
            color: #d32f2f;
            background: #fde8e8;
            padding: 10px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
            text-align: left;
        }
        .success-msg {
            color: #155724;
            background: #d4edda;
            padding: 10px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 20px;
            text-align: left;
        }
    </style>
</head>
<body>

<div class="otp-card">
    <h2>Enter Verification Code</h2>
    <p>We have sent a 6-digit OTP code to <br><span class="email-display">{{ session('admin_email') }}</span></p>

    @if(session('success'))
        <div class="success-msg">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error-msg">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('admin.otp.submit') }}" method="POST">
        @csrf
        <label for="otp">Enter 6-Digit Code</label>
        <input type="text" id="otp" name="otp" maxlength="6" placeholder="000000" required autocomplete="off">
        
        <button type="submit">Verify & Login</button>
    </form>
</div>

</body>
</html>