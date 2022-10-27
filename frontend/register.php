<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="register.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="register.js" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>signup</title>
</head>

<body>
  <?php include './template/header.php' ?>

  <!-- sign up form -->
  <div class="formcontainer">
    <form id="form" name="validateForm" action="../backend/signup.php" method="POST" onsubmit="return validate(event)">
      <h1>Sign Up</h1>
      <div class="textfield">
        <label for="email">Email Address</label>
        <div>
          <input type="text" name="email" id="email" placeholder="Email" />
          <i class="fa fa-exclamation-circle" id="email_error_icon"></i>
          <small id="email_error"></small>
        </div>
      </div>

      <div class="textfield">
        <label for="name">User Name</label>
        <div>
          <input type="text" name="name" id="name" placeholder="User name" />
          <i class="fa fa-exclamation-circle" id="name_error_icon"></i>
          <small id="name_error"></small>
        </div>
      </div>

      <div class="textfield">
        <label for="pass1">Password</label>
        <div>
          <input type="password" name="pass1" id="pass1" placeholder="Password" />
          <i class="fa fa-exclamation-circle" id="pass1_error_icon"></i>
          <small id="pass1_error"></small>
        </div>
      </div>

      <div class="textfield">
        <label for="pass2">Re-type Password</label>
        <div>
          <input type="password" name="pass2" id="pass2" placeholder="Password" />
          <i class="fa fa-exclamation-circle" id="pass2_error_icon"></i>
          <small id="pass2_error"></small>
        </div>
      </div>

      <div class="textfield checkbox">
        <input type="checkbox" name="terms" id="terms" />
        <label for="terms">I agree to the terms </label>
      </div>

      <button type="submit" name="submit">
        Sign-Up
      </button>

    </form>
  </div>

  <?php include './template/footer.php' ?>
</body>

</html>