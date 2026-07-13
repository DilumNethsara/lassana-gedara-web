<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lassana Gedara — Admin Login</title>
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
        .login-card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
            box-sizing: border-box;
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
        label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }
        input[type="email"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #e2dfd9;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 15px;
            margin-bottom: 20px;
        }
        input[type="email"]:focus {
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
        }
    </style>
</head>
<body>

<div class="login-card">
    <h2>Admin Login</h2>
    <p>Enter your email to receive a secure access code.</p>

    @if($errors->any())
        <div class="error-msg">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf
        <label for="email">Admin Email Address</label>
        <input type="email" id="email" name="email" placeholder="example@gmail.com" required>
        
        <button type="submit">Send OTP Code</button>
    </form>
</div>

</body>
</html>