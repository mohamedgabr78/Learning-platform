<?php
include_once '../backend/config.php';

if (isset($_GET['search'])) {

    $search = mysqli_real_escape_string($conn, $_GET['search']);
}

$sql = 'SELECT course_id,course_name,course_desc,course_content,course_img,course_price FROM courses';

$query = mysqli_query($conn, $sql);

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

if (!isset($search) || $search == '') {
    foreach ($data as $course) {
        $img = $course["course_img"];
        $img = base64_encode($img);
        echo
        "<div class='course-card'>
    <img src='data:image/"  . ";base64," . $img . "'/>
    <div class='card-content'>
        <h5>{$course['course_name']}</h5>
        <p>{$course['course_desc']}</p>
        <div>{$course['course_price']}</div>
        <a href='course.php?{$course['course_id']}'>More details</a>
    </div>
</div>";
    }
} else {
    $sql = "SELECT course_id,course_name,course_desc,course_content,course_img,course_price FROM courses WHERE course_name LIKE '$search%' ";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    foreach ($data as $course) {
        $img = $course["course_img"];
        $img = base64_encode($img);
        echo
        "<div class='course-card'>
    <img src='data:image/"  . ";base64," . $img . "'/>
    <div class='card-content'>
        <h5>{$course['course_name']}</h5>
        <p>{$course['course_desc']}</p>
        <div>{$course['course_price']}</div>
        <a href='course.php?{$course['course_id']}'>More details</a>
    </div>
</div>";
    }
}
