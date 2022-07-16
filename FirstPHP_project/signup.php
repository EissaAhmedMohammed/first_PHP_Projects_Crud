<?php
include "config.php";

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  $sql = "INSERT INTO `login`(`id`, `username`, `email`, `password`) VALUES (null,'$username','$email','$password');";
  $res = mysqli_query($con, $sql);
  header("location: index.php");
}
?>


<html lang="en">

<head>
  <title>Sign Up | By Code Info</title>

  <link rel="stylesheet" href="css/login.css">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="signup-box">
    <h1>Sign Up</h1>
    <form method="POST" action="signup.php">
      <label>User Name</label>
      <input type="text" placeholder="" name="username" />
      <label>Email</label>
      <input type="email" placeholder="" name="email" />
      <label>Password</label>
      <input type="password" placeholder="" name="password" />
      <label>Confirm Password</label>
      <input type="password" placeholder="" name="cpassword" />
      <input type="submit" value="Submit" name="submit" />
    </form>

  </div>
  <p class="para-2">
    Already have an account? <a href="index.php">Login here</a>
  </p>
</body>

</html>