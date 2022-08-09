<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="card.css">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

  <script defer src="index.js"></script>
  <title>My Courses</title>
</head>

<body id="home">
  <?php include './template/header.php' ?>
  <main class="home">
    <h1>Welcome! to My Courses!</h1>
    <form method="GET">
      <input type="text" placeholder="What do you want to learn?" name="search" />
      <button type="search">
        <i class="fa fa-search"></i>
      </button>
    </form>

    <div class="cards">
      <?php include './card.php' ?>
    </div>
    </div>
    </div>
    <?php include './template/footer.php' ?>
  </main>
</body>

</html>