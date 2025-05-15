<?php

include '../view/logController.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
</head>
<body>
  <div class="login-container">
    <h1>ADMIN</h1>
    <form action="logController.php" method="post">
      <input type="text" id="username" name="email" placeholder="email" required>
      <br>
      <input type="password" id="password" name="password" placeholder="Password" required>
      <br>
      <input type="submit" value="Login">
    </form>

  </div>
</body>
</html>
       