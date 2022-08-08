<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <h4>your purchases</h4>
    <?php
    include_once '../backend/config.php';

    $sql = "SELECT * FROM cart where user_id= '{$_Session['user_id']}' ";

    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

    $img = $course["course_img"];
    $img = base64_encode($img);

    foreach ($data as $course) {
        echo "<h5>{$course['course_name']}</h5>
        <img src='data:image/"  . ";base64," . $img . "'/>";
    }

    ?>

</body>

</html>