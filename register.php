<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
</head>
<body>
  <h1>Welcome Register Here</h1>
  <form action="regaction.php" method="post">
    <input type="text" name="first_name" placeholder="First Name"><br>
    <input type="text" name="last_name" placeholder="Last Name"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" name="submit">

    <p>
      Already a member? <a href="login.php">Login.</a>
    </p>
  </form>
</body>
</html>