<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Mohamed_Gabr" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <script defer src="index.js"></script>
  <script defer src="header.js"></script>
  <script defer src="footer.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <title>My Courses</title>
</head>

<body>
  <?php include './header.php' ?>
  <main>
    <form>
      <input type="text" placeholder="What do you want to learn?" />
      <button type="submit">
        <i class="fa fa-search"></i>
      </button>
    </form>
  </main>
  <a href="./register.html">sign up</a>
  <?php include './footer.php' ?>
</body>

</html>