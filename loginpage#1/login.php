<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <link rel="stylesheet" href="style.css">
  <title>Login Page</title>
</head>
<style>
    body {
  margin: 0;
  padding: 0;
}




.navbar-nav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: flex-end; /* Menyebabkan tulisan di navbar berada di sebelah kanan */
}

.nav-item {
  margin-right: 10px;
}

.nav-item:last-child {
  margin-right: 0;
}

.nav-item a {
  text-decoration: none;
  color: black;
  padding: 5px 10px;
  border-radius: 4px;
}


</style>
<body>
<nav class="navbar">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="#">Home</a></li>
      <li class="nav-item"><a href="#">About</a></li>
      <li class="nav-item"><a href="#">Services</a></li>
      <li class="nav-item"><a href="#">Contact</a></li>
    </ul>
  </nav>
  <div class="container">
    <form id="loginForm">
      <h2>Login</h2>
      <div class="input-group">
        <label for="username">Username:</label>
        <input type="text" id="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password:</label>
        <input type="password" id="password" required>
        <a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
        <p class="signup-text">Don't have an account? <a href="signup.html">Sign up</a></p>
      </div>
      <button type="submit">Login</button>
    </form>
  </div>

  <script src="script.js"></script>
</body>
</html>
