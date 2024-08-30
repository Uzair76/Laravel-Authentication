<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <form action="{{ route('check.login') }}" method="POST">
            @csrf  <!-- Add CSRF token for form security -->

            <!-- Email Field -->
            <div class="field">
                <input type="text" name="email" value="{{ old('email') }}" required>
                <label>Email Address</label>
                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <!-- Password Field -->
            <div class="field">
                <input type="password" name="password" required>
                <label>Password</label>
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <!-- Remember Me Checkbox and Forgot Password Link -->
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="remember-me" name="remember">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="pass-link">
                    <a href="#">Forgot password?</a>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="field">
                <input type="submit" value="Login">
            </div>

            <!-- Signup Link -->
            <div class="signup-link">
                Not a member? <a href="{{ route('user.register') }}">Signup now</a>
            </div>
        </form>
    </div>
</body>
</html>
