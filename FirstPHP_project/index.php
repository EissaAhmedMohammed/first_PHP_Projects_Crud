<?php
include "config.php";

if (isset($_POST['sub'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM login WHERE email='{$email}' AND password='{$password}'";
  $result = mysqli_query($con, $sql);
  $count = mysqli_num_rows($result);

  if ($count === 1) {
    $row = mysqli_fetch_assoc($result);
    header("Location: home.html");
  } else {
    echo "not";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soran med</title>
  <link rel="stylesheet" href="css/login.css">


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
  </header>
  <br><br> <br>
  <br><br><br>
  <div class="login-box">
    <h1>Login</h1>
    <form method="post" action="index.php">
      <label>Email</label>
      <input type="email" placeholder="" name="email" />
      <label>Password</label>
      <input type="password" placeholder="" name="password" />
      <input type="submit" value="Submit" name="sub" />
    </form>
  </div>
  <p class="para-2">
    Not have an account? <a href="signup.php">Sign Up Here</a>
  </p>
</body>

</html>