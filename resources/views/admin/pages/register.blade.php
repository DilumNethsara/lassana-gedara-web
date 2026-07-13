<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --error-color: #dc2626;
            --success-color: #16a34a;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #f3f4f6, #e5e7eb);
        }

        .container {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            width: 90%;
            max-width: 400px;
            transition: 0.3s ease;
        }

        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-header h1 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
            pointer-events: none;
            transition: 0.3s ease;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group input:valid,
        .form-group select:valid {
            border-color: var(--primary-color);
            outline: none;
        }

        .form-group input:focus ~ label,
        .form-group select:focus ~ label,
        .form-group input:valid ~ label,
        .form-group select:valid ~ label {
            top: -10px;
            left: 0.8rem;
            font-size: 0.8rem;
            background: white;
            padding: 0 0.2rem;
            color: var(--primary-color);
        }

        .password-strength {
            height: 4px;
            background: #e5e7eb;
            border-radius: 2px;
            margin-top: 0.5rem;
            overflow: hidden;
        }

        .strength-bar {
            height: 100%;
            width: 0;
            transition: 0.3s ease;
        }

        .btn {
            width: 100%;
            padding: 1rem;
            border: none;
            border-radius: 0.5rem;
            background: var(--primary-color);
            color: white;
            font-size: 1rem;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .btn:hover {
            background: var(--secondary-color);
        }

        .switch-form {
            text-align: center;
            margin-top: 1rem;
        }

        .switch-form a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
        }

        .social-login {
            margin-top: 2rem;
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .social-btn {
            padding: 0.75rem;
            border: 2px solid #e5e7eb;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .social-btn:hover {
            border-color: var(--primary-color);
            background: #eff6ff;
        }

        .message {
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            display: none;
        }

        .error {
            background: #fee2e2;
            color: var(--error-color);
        }

        .success {
            background: #dcfce7;
            color: var(--success-color);
        }

        @media (max-width: 480px) {
            .container {
                width: 95%;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Registration Container -->
    <div class="container" id="registerContainer">
        <div class="form-header">
            <h1>Sign Up</h1>
            <p>Create your account</p>
        </div>
        
        <div class="message" id="registerMessage"></div>

        <form id="registerForm" action="{{route('register')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" required name="name" value="{{ old('name') }}">
                <label>Name</label>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <input type="email" required name="email" value="{{ old('email') }}">
                <label>Email Address</label>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Role Selection Dropdown -->
            <div class="form-group">
                <select name="role" required>
                    <option value="" hidden>Select Role</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="coordinator" {{ old('role') == 'coordinator' ? 'selected' : '' }}>Coordinator</option>
                    <!-- Add more roles if needed -->
                </select>
                <label style="background-color: white; width: 50%;">Select Role</label>
                @error('role')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <input type="password" required id="regPassword" name="password">
                <label>Password</label>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
                <div class="password-strength">
                    <div class="strength-bar" id="strengthBar"></div>
                </div>                
            </div>

            <div class="form-group">
                <input type="password" required id="confirmPassword" name="password_confirmation">
                <label>Confirm Password</label>  
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
                @enderror              
            </div>
            
            <button type="submit" class="btn">Register</button>
        </form>

        {{-- <div class="switch-form">
            <span>Already have an account? </span>
            <a href="{{route('get_login')}}" >Login here</a>
        </div> --}}
    </div>

    <script>
        // Password strength indicator
        document.getElementById('regPassword').addEventListener('input', function(e) {
            const password = e.target.value;
            const strengthBar = document.getElementById('strengthBar');
            let strength = 0;

            if (password.match(/[a-z]+/)) strength++;
            if (password.match(/[A-Z]+/)) strength++;
            if (password.match(/[0-9]+/)) strength++;
            if (password.match(/[!@#$%^&*()_+]+/)) strength++;
            if (password.length >= 8) strength++;

            const width = (strength / 5) * 100;
            strengthBar.style.width = `${width}%`;
            
            if (strength < 2) {
                strengthBar.style.backgroundColor = '#dc2626';
            } else if (strength < 4) {
                strengthBar.style.backgroundColor = '#f59e0b';
            } else {
                strengthBar.style.backgroundColor = '#16a34a';
            }
        });
    </script>
</body>
</html>
