<!-- TODO -->
<!-- create PHP variables to store information in the form -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Register Form</title>
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

    /* The main register card container */
    .register-container {
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 440px;
      /* Slightly wider to comfortably fit multi-input rows */
      transition: transform 0.3s ease;
    }

    /* Subtle lift effect on hover */
    .register-container:hover {
      transform: translateY(-5px);
    }

    /* Form Header styling */
    .register-header {
      text-align: center;
      margin-bottom: 25px;
    }

    .register-header h2 {
      color: #1f2937;
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 8px;
    }

    .register-header p {
      color: #6b7280;
      font-size: 14px;
    }

    /* Flexbox row for First and Last Name */
    .input-row {
      display: flex;
      gap: 15px;
      margin-bottom: 18px;
    }

    /* Input styling and grouping */
    .input-group {
      position: relative;
      margin-bottom: 18px;
      width: 100%;
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

    /* Terms and conditions checkbox alignment */
    .terms-condition {
      display: flex;
      align-items: flex-start;
      gap: 8px;
      margin-bottom: 25px;
      font-size: 14px;
      color: #4b5563;
      cursor: pointer;
      line-height: 1.4;
    }

    .terms-condition input {
      margin-top: 3px;
      cursor: pointer;
      accent-color: #4f46e5;
    }

    .terms-condition a {
      color: #4f46e5;
      text-decoration: none;
      font-weight: 500;
    }

    .terms-condition a:hover {
      text-decoration: underline;
    }

    /* Register Button styling */
    .register-btn {
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

    .register-btn:hover {
      background-color: #4338ca;
    }

    .register-btn:active {
      transform: scale(0.98);
    }

    /* Footer styling for Sign In link */
    .register-footer {
      text-align: center;
      margin-top: 25px;
      font-size: 14px;
      color: #6b7280;
    }

    .register-footer a {
      color: #4f46e5;
      text-decoration: none;
      font-weight: 600;
    }

    .register-footer a:hover {
      color: #3730a3;
      text-decoration: underline;
    }

    /* Responsive twist for the dual Name fields on small screens */
    @media (max-width: 400px) {
      .input-row {
        flex-direction: column;
        gap: 0;
      }
    }
  </style>
</head>

<body>

  <div class="register-container">
    <div class="register-header">
      <h2>Create Account</h2>
      <p>Get started with your free account today</p>
    </div>

    <form action="#" method="POST">
      <!-- First and Last Name side-by-side row -->
      <div class="input-row">
        <div class="input-group">
          <label for="first-name">First Name</label>
          <input type="text" id="first-name" name="first_name" placeholder="John" required autocomplete="given-name">
        </div>
        <div class="input-group">
          <label for="last-name">Last Name</label>
          <input type="text" id="last-name" name="last_name" placeholder="Doe" required autocomplete="family-name">
        </div>
      </div>

      <div class="input-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="john.doe@example.com" required autocomplete="email">
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Minimum 8 characters" required>
      </div>

      <div class="input-group">
        <label for="confirm-password">Confirm Password</label>
        <input type="password" id="confirm-password" name="confirm_password" placeholder="••••••••" required>
      </div>

      <label class="terms-condition">
        <input type="checkbox" name="terms" required>
        <span>I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></span>
      </label>

      <button type="submit" class="register-btn">Sign Up</button>
    </form>

    <div class="register-footer">
      Already have an account? <a href="#">Log in</a>
    </div>
  </div>

</body>

</html>