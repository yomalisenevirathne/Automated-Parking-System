<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Registration</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f0f2f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      padding: 20px;
    }

    .container {
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      transition: transform 0.3s ease;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 28px;
      color: #333;
      font-weight: 600;
    }

    .input-field {
      margin-bottom: 15px;
      display: flex;
      flex-direction: column;
    }

    .input-field input {
      width: 100%;
      padding: 12px 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 14px;
      background-color: #f9f9f9;
      transition: border-color 0.3s ease;
    }

    .input-field input:focus {
      border-color: #0056ff;
      outline: none;
      background-color: #fff;
    }

    .input-field label {
      margin-bottom: 5px;
      font-size: 14px;
      color: #666;
      font-weight: 500;
    }

    .checkbox-group {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
    }

    .checkbox-group input {
      margin-right: 10px;
    }

    .form-footer a {
      font-size: 12px;
      color: #0056ff;
      text-decoration: none;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      background-color: #0056ff;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .submit-btn:hover {
      background-color: #0041cc;
      transform: translateY(-2px);
    }

    .toggle-btn {
      display: block;
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #0056ff;
      cursor: pointer;
      text-decoration: none;
    }

    .toggle-btn:hover {
      text-decoration: underline;
    }

    .form-wrapper {
      display: none;
    }

    .form-wrapper.active {
      display: block;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .container {
        width: 90%;
        padding: 30px;
      }
    }
  </style>
</head>
<body>

  <div class="container">

    <!-- Login Form -->
    <div id="login-form" class="form-wrapper active">
      <h2>Customer Login</h2>
      <form action="cslogin.php" method="POST">
        <div class="input-field">
          <label for="login-email">Email</label>
          <input type="email" id="login-email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-field">
          <label for="login-password">Password</label>
          <input type="password" id="login-password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="checkbox-group">
          <label>
            <input type="checkbox" id="remember-me" name="remember_me"> Remember me
          </label>
          <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="submit-btn">Login Now</button>
      </form>
      <a class="toggle-btn" onclick="toggleForm('register')">Don't have an account? Signup now</a>
    </div>

    <!-- Registration Form -->
    <div id="register-form" class="form-wrapper">
      <h2>Customer Register</h2>
      <form action="csregister.php" method="POST">
        <div class="input-field">
          <label for="reg-name">Name</label>
          <input type="text" id="reg-name" name="firstname" placeholder="Enter your name" required>
        </div>
        <div class="input-field">
          <label for="reg-email">Email</label>
          <input type="email" id="reg-email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-field">
          <label for="reg-password">Password</label>
          <input type="password" id="reg-password" name="password" placeholder="Create a password" required>
        </div>
        <div class="input-field">
          <label for="reg-confirm-password">Confirm Password</label>
          <input type="password" id="reg-confirm-password" name="reg_confirm_password" placeholder="Confirm your password" required>
        </div>
        <div class="checkbox-group">
          <label>
            <input type="checkbox" id="terms" name="terms" required> I accept all terms & conditions
          </label>
        </div>
        <button type="submit" class="submit-btn">Register Now</button>
      </form>
      <a class="toggle-btn" onclick="toggleForm('login')">Already have an account? Login now</a>
    </div>

  </div>

  <script>
    // Toggle between forms
    function toggleForm(form) {
      const loginForm = document.getElementById('login-form');
      const registerForm = document.getElementById('register-form');

      if (form === 'login') {
        loginForm.classList.add('active');
        registerForm.classList.remove('active');
      } else {
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
      }
    }
  </script>

</body>
</html>
