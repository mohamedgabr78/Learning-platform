<?php
$conn = mysqli_connect("localhost", "root", "", "platform_learning");
session_start();
// if ($conn) {
//     echo "connected" . mysqli_connect_error();
// }


function loggedIn()
{
    if (isset($_SESSION['user'])) {
        return true;
    }
    return false;
}

function isRegisterd($course_id)
{

    global $conn;
    $user_id = $_SESSION['user']['user_id'];
    $sql = mysqli_query($conn, "SELECT * FROM `user_courses` WHERE `course_id` = '{$course_id}' AND `user_id` = '{$user_id}'");
    if (mysqli_num_rows($sql) > 0) {
        return true;
    }

    return false;
}


function getCourses()
{
    global $conn;
    $user_id = $_SESSION['user']['user_id'];
    $sql = mysqli_query($conn, "SELECT * FROM courses INNER JOIN user_courses ON courses.course_id = user_courses.course_id WHERE user_courses.user_id = '{$user_id}'");

    $data = mysqli_fetch_all($sql, MYSQLI_ASSOC);

    return $data;
}
