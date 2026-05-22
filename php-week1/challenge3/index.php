<!-- TODO -->
<!-- create PHP variables to store information in the form -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Login Form</title>
  <style>
    /* Reset default browser margins and paddings */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Center everything perfectly on the screen with a nice gradient background */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
      padding: 20px;
    }

    /* The main login card container */
    .login-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 400px;
      transition: transform 0.3s ease;
    }

    /* Subtle lift effect on hover */
    .login-container:hover {
      transform: translateY(-5px);
    }

    /* Form Header styling */
    .login-header {
      text-align: center;
      margin-bottom: 30px;
    }

    .login-header h2 {
      color: #1f2937;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .login-header p {
      color: #6b7280;
      font-size: 14px;
    }

    /* Input styling and grouping */
    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 6px;
      color: #4b5563;
      font-size: 14px;
      font-weight: 500;
    }

    .input-group input {
      width: 100%;
      padding: 12px 16px;
      border: 2px solid #e5e7eb;
      border-radius: 8px;
      font-size: 15px;
      outline: none;
      transition: all 0.3s ease;
      color: #1f2937;
    }

    /* Focus state for inputs */
    .input-group input:focus {
      border-color: #4f46e5;
      box-shadow: 0 0 0 4px rgba(79, 70, 229, 0.1);
    }

    /* "Remember me" and "Forgot password" alignment */
    .form-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 25px;
      font-size: 14px;
    }

    .remember-me {
      display: flex;
      align-items: center;
      gap: 8px;
      color: #4b5563;
      cursor: pointer;
    }

    .remember-me input {
      cursor: pointer;
      accent-color: #4f46e5;
      /* Colors the checkbox to match the theme */
    }

    .forgot-password {
      color: #4f46e5;
      text-decoration: none;
      font-weight: 500;
      transition: color 0.2s ease;
    }

    .forgot-password:hover {
      color: #3730a3;
      text-decoration: underline;
    }

    /* Login Button styling */
    .login-btn {
      width: 100%;
      padding: 12px;
      background-color: #4f46e5;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.2s ease, transform 0.1s ease;
      box-shadow: 0 4px 6px -1px rgba(79, 70, 229, 0.2);
    }

    .login-btn:hover {
      background-color: #4338ca;
    }

    .login-btn:active {
      transform: scale(0.98);
    }

    /* Footer styling for Sign Up link */
    .login-footer {
      text-align: center;
      margin-top: 25px;
      font-size: 14px;
      color: #6b7280;
    }

    .login-footer a {
      color: #4f46e5;
      text-decoration: none;
      font-weight: 600;
    }

    .login-footer a:hover {
      color: #3730a3;
      text-decoration: underline;
    }
  </style>
</head>

<body>

  <div class="login-container">
    <div class="login-header">
      <h2>Welcome Back</h2>
      <p>Please enter your details to sign in</p>
    </div>

    <!-- Setting action to "#" just as a placeholder for actual backend processing -->
    <form action="#" method="POST">
      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="you@example.com" required autocomplete="email">
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="••••••••" required>
      </div>

      <div class="form-actions">
        <label class="remember-me">
          <input type="checkbox" name="remember">
          Remember me
        </label>
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>

      <button type="submit" class="login-btn">Sign In</button>
    </form>

    <div class="login-footer">
      Don't have an account? <a href="#">Create one</a>
    </div>
  </div>

</body>

</html>