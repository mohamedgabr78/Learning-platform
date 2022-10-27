<?php
include_once './config.php';



if (isset($_POST['add_btn'])) {
    $course_id = $_POST['course_id'];
    $user_id = $_SESSION['user']['user_id'];
    $sql = mysqli_query($conn, "INSERT INTO user_courses (course_id,user_id) VALUES('{$course_id}','{$user_id}')");
    header('Location:/frontend/user_courses.php');
}
