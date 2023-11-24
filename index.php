<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="login-style.css">
</head>
</head>
<body>

  <div class="login-container">
    <div class="login-header">
      <h2>Login</h2>
    </div>
    <div class="login-form">
    <input type="text" class="login-input" id="username" placeholder="Email or Phone" required>
      <input type="password" class="login-input" id="password" placeholder="Password" required>
      <button type="button" class="login-button" onclick="validateLogin()">Login</button>
    </div>
    <div class="login-footer">
      <a href="#">Forgot password?</a>
    </div>
  </div>

  <script>
    // click enter instead of mouse
    document.getElementById('username').addEventListener('keypress', function(event) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent the default Enter key behavior (like new line)
    validateLogin();
  }
});
document.getElementById('password').addEventListener('keypress', function(event) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent the default Enter key behavior (like new line)
    validateLogin();
  }
});

// if username and pass == admin then go 
    function validateLogin() {
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      // Check if the credentials are valid
      if (username === 'admin' && password === 'admin') {
        alert('Login successful! Redirecting...');
        window.location.href = 'admin.php';
        // You can redirect to another page or perform other actions here
      } else {
        alert('Invalid credentials. Please try again.');
      }
    }

 </script>

</body>

</html>