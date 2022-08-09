<?php
include_once '../backend/config.php';
if (loggedIn()) {
  header("location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="register.css" />
  <link rel="stylesheet" href="style.css" />

  <script src="login.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>Login</title>
</head>

<body onload="showMessage()">
  <?php include './template/header.php' ?>

  <div class=" formcontainer">


    <form id="form" name="validateForm" action="../backend/login.php" method="POST">
      <h1>Login</h1>
      <div class="textfield">
        <label for="email">Email Address</label>
        <div>
          <input type="text" name="email" id="email" placeholder="Email" />
          <i class="fa fa-exclamation-circle" id="email_error_icon"></i>
          <small id="email_error"></small>
        </div>
      </div>

      <div class="textfield">
        <label for="password">Password</label>
        <div>
          <input type="password" name="password" id="password" placeholder="Password" />
        </div>
      </div>
      <button type="submit">Login</button>

      <a href="register.php">Don`t have an account? <span>Signup now!</span>
      </a>
    </form>
    <div class="alert-toast">This Email is already exists!</div>
    <?php
    if (isset($_SESSION['errors'])) {
      foreach ($_SESSION['errors'] as $error) {
        echo $error;
      }
      unset($_SESSION['errors']);
    }
    ?>
  </div>
  <?php include './template/footer.php' ?>
</body>

</html>