<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background: linear-gradient(135deg, #008a27 0%, #6B8E23 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 480px;
            padding: 40px;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #008a27, #6B8E23);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
        }

        .logo svg {
            width: 32px;
            height: 32px;
            fill: white;
        }

        h1 {
            color: #333;
            margin-bottom: 6px;
            font-size: 28px;
        }

        .subtitle {
            color: #666;
            margin-bottom: 32px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-row {
            display: flex;
            gap: 14px;
        }

        .form-row .form-group {
            flex: 1;
        }

        label {
            display: block;
            color: #333;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
        }

        label .required {
            color: #e74c3c;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper .icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            height: 18px;
            color: #999;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 12px 16px 12px 42px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            font-family: inherit;
            background: #fafafa;
        }

        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="text"]:focus {
            outline: none;
            border-color: #6B8E23;
            box-shadow: 0 0 0 3px rgba(107, 142, 35, 0.1);
            background: white;
        }

        input.input-error {
            border-color: #e74c3c;
        }

        input.input-error:focus {
            border-color: #e74c3c;
            box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.1);
        }

        input.input-success {
            border-color: #27ae60;
        }

        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #999;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .password-toggle:hover {
            color: #6B8E23;
        }

        .helper-text {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }

        .error-text {
            font-size: 12px;
            color: #e74c3c;
            margin-top: 5px;
            display: none;
        }

        /* Password strength */
        .strength-bar {
            display: flex;
            gap: 4px;
            margin-top: 8px;
        }

        .strength-bar div {
            flex: 1;
            height: 4px;
            border-radius: 2px;
            background: #e0e0e0;
            transition: background 0.3s ease;
        }

        .strength-bar.weak div:nth-child(1) { background: #e74c3c; }
        .strength-bar.medium div:nth-child(1),
        .strength-bar.medium div:nth-child(2) { background: #f39c12; }
        .strength-bar.strong div:nth-child(1),
        .strength-bar.strong div:nth-child(2),
        .strength-bar.strong div:nth-child(3) { background: #27ae60; }
        .strength-bar.very-strong div { background: #27ae60; }

        .strength-label {
            font-size: 11px;
            margin-top: 4px;
            font-weight: 600;
        }

        .strength-label.weak { color: #e74c3c; }
        .strength-label.medium { color: #f39c12; }
        .strength-label.strong { color: #27ae60; }
        .strength-label.very-strong { color: #27ae60; }

        .terms-group {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            margin: 24px 0;
        }

        .terms-group input[type="checkbox"] {
            width: 18px;
            min-width: 18px;
            height: 18px;
            accent-color: #6B8E23;
            cursor: pointer;
            margin-top: 1px;
        }

        .terms-group label {
            font-size: 13px;
            color: #555;
            font-weight: 400;
            margin-bottom: 0;
        }

        .terms-group label a {
            color: #6B8E23;
            text-decoration: none;
            font-weight: 600;
        }

        .terms-group label a:hover {
            text-decoration: underline;
        }

        .btn-primary {
            width: 100%;
            padding: 14px 24px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #6B8E23;
            color: white;
        }

        .btn-primary:hover {
            background: #556B1E;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(107, 142, 35, 0.4);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 24px 0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e0e0e0;
        }

        .divider span {
            padding: 0 14px;
            color: #999;
            font-size: 13px;
        }

        .login-link {
            text-align: center;
            font-size: 14px;
            color: #666;
        }

        .login-link a {
            color: #6B8E23;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 480px) {
            .container {
                padding: 28px 24px;
            }

            h1 {
                font-size: 24px;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>
        </div>

        <h1>Create Account</h1>
        <p class="subtitle">Sign up to get started today</p>

        <form action="{{route('toLogin')}}" method="POST" id="registerForm">
            @csrf
            <!-- @method('GET') -->
            <div class="form-row">
                <div class="form-group">
                    <label for="name"> Name <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                            <circle cx="12" cy="8" r="4"/>
                        </svg>
                        <input type="text" id="firstName" name="name" placeholder="John" required>
                    </div>
                </div>
                <!-- <div class="form-group">
                    <label for="lastName">Last Name <span class="required">*</span></label>
                    <div class="input-wrapper">
                        <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/>
                            <circle cx="12" cy="8" r="4"/>
                        </svg>
                        <input type="text" id="lastName" name="lastName" placeholder="Doe" required>
                    </div>
                </div> -->
            </div>

            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <div class="input-wrapper">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required oninput="validateEmail()">
                </div>
                <div class="error-text" id="emailError">Please enter a valid email address.</div>
            </div>
                        <!-- role -->
<!-- <div class="form-group">
    <label for="role">Role <span class="required">*</span></label>
    <div class="input-wrapper">
        <select name="role" id="role" required
            style="width:100%; padding:12px 16px; border:2px solid #e0e0e0; border-radius:8px;">
            <option value="client" selected>Client</option>
            <option value="admin">Admin</option>
        </select>
    </div>
</div> -->

            <!--  -->

            <div class="form-group">
                <label for="password">Password <span class="required">*</span></label>
                <div class="input-wrapper">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0110 0v4"/>
                    </svg>
                    <input type="password" id="password" name="password" placeholder="Create a password" required >
                    <button type="button" class="password-toggle" onclick="togglePassword('password', 'eyeIcon1')">
                        <svg id="eyeIcon1" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
                <div class="strength-bar" id="strengthBar">
                    <div></div><div></div><div></div><div></div>
                </div>
                <div class="strength-label" id="strengthLabel"></div>
                <div class="helper-text">Min 8 characters with letters, numbers & symbols</div>
            </div>


            <div class="form-group">
                <label for="confirmPassword">Confirm Password <span class="required">*</span></label>
                <div class="input-wrapper">
                    <svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0110 0v4"/>
                    </svg>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required oninput="checkPasswordMatch()">
                    <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword', 'eyeIcon2')">
                        <svg id="eyeIcon2" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </button>
                </div>
                <div class="error-text" id="confirmError">Passwords do not match.</div>
            </div>

            <!-- <div class="terms-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
            </div> -->

            <button type="submit" class="btn-primary">Create Account</button>

            <div class="divider"><span>or</span></div>

            <div class="login-link">
                Already have an account? <a href="/showlogin">Sign In</a>
            </div>
        </form>
    </div>

    <!-- <script>
        // Toggle password visibility
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            const isVisible = input.type === 'text';
            input.type = isVisible ? 'password' : 'text';

            if (!isVisible) {
                icon.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94"/><path d="M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19"/><line x1="1" y1="1" x2="23" y2="23"/>';
            } else {
                icon.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>';
            }
        }

        // Email validation
        function validateEmail() {
            const email = document.getElementById('email');
            const error = document.getElementById('emailError');
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email.value && !emailRegex.test(email.value)) {
                email.classList.add('input-error');
                email.classList.remove('input-success');
                error.style.display = 'block';
            } else if (email.value && emailRegex.test(email.value)) {
                email.classList.remove('input-error');
                email.classList.add('input-success');
                error.style.display = 'none';
            } else {
                email.classList.remove('input-error', 'input-success');
                error.style.display = 'none';
            }
        }

        // Password strength checker
        function checkPasswordStrength() {
            const password = document.getElementById('password').value;
            const bar = document.getElementById('strengthBar');
            const label = document.getElementById('strengthLabel');

            bar.className = 'strength-bar';
            label.className = 'strength-label';
            label.textContent = '';

            if (password.length === 0) return;

            let score = 0;
            if (password.length >= 8) score++;
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) score++;
            if (/\d/.test(password)) score++;
            if (/[^a-zA-Z0-9]/.test(password)) score++;

            const levels = ['weak', 'medium', 'strong', 'very-strong'];
            const labels = ['Weak', 'Medium', 'Strong', 'Very Strong'];

            const level = levels[Math.min(score - 1, 3)];
            bar.classList.add(level);
            label.classList.add(level);
            label.textContent = labels[Math.min(score - 1, 3)];

            checkPasswordMatch();
        }

        // Confirm password match
        function checkPasswordMatch() {
            const password = document.getElementById('password').value;
            const confirm = document.getElementById('confirmPassword');
            const error = document.getElementById('confirmError');

            if (confirm.value.length > 0) {
                if (password !== confirm.value) {
                    confirm.classList.add('input-error');
                    confirm.classList.remove('input-success');
                    error.style.display = 'block';
                } else {
                    confirm.classList.remove('input-error');
                    confirm.classList.add('input-success');
                    error.style.display = 'none';
                }
            } else {
                confirm.classList.remove('input-error', 'input-success');
                error.style.display = 'none';
            }
        }

        // Form submission
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const data = {
                firstName: document.getElementById('firstName').value,
                lastName: document.getElementById('lastName').value,
                email: document.getElementById('email').value,
                password: document.getElementById('password').value
            };

            console.log('Register Data:', data);

            // Simulate registration (replace with real API call)
            // fetch('/api/register', {
            //     method: 'POST',
            //     headers: { 'Content-Type': 'application/json' },
            //     body: JSON.stringify(data)
            // })
            // .then(res => res.json())
            // .then(d => { window.location.href = '/login'; })
            // .catch(err => { alert('Registration failed'); });

            alert('Account created successfully!\nCheck console for data.');
        });
    </script> -->
</body>
</html>