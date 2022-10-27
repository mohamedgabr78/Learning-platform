<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mohamed_Gabr" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <title>Course</title>
</head>

<body>
    <?php include './template/header.php' ?>

    <?php
    include_once '../backend/config.php';
    $sql = 'SELECT course_id,course_name,course_desc,course_content,course_img,course_price FROM courses';
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

    //the the params from url to determine the course id.
    $selected_course_id = $_SERVER['QUERY_STRING'];


    foreach ($data as $course) {
        if ($course['course_id'] == $selected_course_id) {
            $img = $course["course_img"];
            $img = base64_encode($img);
            echo
            "<div class='course-page'>
                <img src=' data:image/" . ";base64," . $img . "' />
                <div class='course-content'>
                    <h2>{$course['course_name']}</h2>

                    <h3>Description</h3>

                    <p>{$course['course_desc']}</p>

                    <h3>Content</h3>
                    <p>{$course['course_content']}</p>

                ";
            if (!isRegisterd($course['course_id'])) {
    ?>
                <div class='course-price'> <?= $course['course_price'] ?></div>
                <form action="../backend/addCourse.php" method="POST">
                    <input type="submit" value="Buy it now" name="add_btn" class="add-course">
                    <input type="hidden" name="course_id" value="<?= $course['course_id'] ?>">
                </form>
    <?php
            } else {
                echo "<div>asdasdasd</div>";
            }
            echo " 
                </div>
            </div>";
        }
    }
    ?>

</body>

</html>