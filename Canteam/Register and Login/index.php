<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ??''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Canteam's Register and Login</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <div class="container">
      <div
        class="form-box <?= isActiveForm('login', $activeForm); ?>"
        id="login-form"
      >
        <form action="login_register.php" method="post">
          <h1>Canteam</h1>
          <br>
          <h2>Login</h2>
          <?= showError($errors["login"]); ?>
          <div class="input-box">
            <span class="icon">
              <ion-icon name="mail"></ion-icon>
            </span>
            <input
              type="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>

          <div class="input-box">
            <span class="icon">
              <ion-icon name="lock-closed"></ion-icon>
            </span>
            <input
              type="password"
              name="password"
              placeholder="Enter a password"
              required
            />
          </div>

          <div class="remember-forgot">
            <label><input type="checkbox" />Remember me</label>
            <a href="forgot-password.php">Forgot Password?</a>
          </div>

          <button type="submit" name="login">Login</button>
          
          <p>
            Don't have an account?
            <a href="#" onclick="showForm('register-form')">Register</a>
          </p>

        </form>
      </div>

      <div
        class="form-box <?= isActiveForm('register', $activeForm); ?>"
        id="register-form"
      >
        <form action="login_register.php" method="post">
          <h1>Canteam</h1>
          <br>
          <h2>Register</h2>
          <?= showError($errors['register']); ?>
          <div class="input-box">
            <input 
                type="text" 
                name="name" 
                placeholder="Enter a name" 
                required 
              />
          </div>
          <div class="input-box">
            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                required
              />
          </div>
          <div class="input-box">
            <input
                type="password"
                name="password"
                placeholder="Enter a password"
                minlength="6"
                maxlength="15"
                required
              />
          </div>
          <div class="input-box">
            <input
                type="password"
                name="confirm_password"
                placeholder="Repeat your password"
                minlength="6"
                maxlength="15"
                required
              />
          </div>

            
          <select name="role" required>
            <option value="">--Select Role--</option>
            <option value="user">User</option>
            <option value="admin">Admin</option>
          </select>
          <button type="submit" name="register">Register</button>
          <p>
            Already have an account?
            <a href="#" onclick="showForm('login-form')">Login</a>
          </p>
        </form>
      </div>
    </div>

    <script src="script.js"></script>

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>

    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
  </body>
</html>
