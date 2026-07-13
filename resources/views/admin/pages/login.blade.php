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

        .form-group input {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: 0.3s ease;
        }

        .form-group input:focus,
        .form-group input:valid {
            border-color: var(--primary-color);
            outline: none;
        }

        .form-group input:focus ~ label,
        .form-group input:valid ~ label {
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
    <!-- Login Container -->
    <div class="container hidden" id="loginContainer">
        @if(session('error'))
            <div class="alert alert-danger text-center">
                {{ session('error') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @endif
        <div class="form-header">
            <h1>Welcome Back</h1>
            <p>Login to your account</p>
        </div>

        <div class="message" id="loginMessage"></div>

        <form action="" method="POST" id="loginForm">
            @csrf
            <div class="form-group">
                <input type="email" required name="email">
                <label>Email Address</label>
                @error('email')
                <span class="text-danger">{{ message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <input type="password" required name="password">
                <label>Password</label>
                @error('password')
                <span class="text-danger">{{ message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="btn">Login</button>
        </form>

        {{-- <div class="switch-form">
            <span>Don't have an account? </span>
            <a href="{{route('get_register')}}">Register here</a>
        </div> --}}
    </div>

    <script>
        // Toggle between Login and Register forms
        function toggleForms() {
            const loginContainer = document.getElementById('loginContainer');
            const registerContainer = document.getElementById('registerContainer');
            loginContainer.classList.toggle('hidden');
            registerContainer.classList.toggle('hidden');
        }

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

        // Form validation and submission
        // document.getElementById('registerForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     const message = document.getElementById('registerMessage');
        //     message.classList.remove('error', 'success');
        //     message.style.display = 'block';

        //     // Add your registration logic here
        //     message.textContent = 'Registration successful!';
        //     message.classList.add('success');
        //     setTimeout(() => message.style.display = 'none', 3000);
        // });

        // document.getElementById('loginForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     const message = document.getElementById('loginMessage');
        //     message.classList.remove('error', 'success');
        //     message.style.display = 'block';

        //     // Add your login logic here
        //     message.textContent = 'Login successful!';
        //     message.classList.add('success');
        //     setTimeout(() => message.style.display = 'none', 3000);
        // });

        // Add hover effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('mouseover', () => {
                button.style.transform = 'translateY(-2px)';
            });
            button.addEventListener('mouseout', () => {
                button.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>