<?php
include_once './config.php';


$sql = 'SELECT course_id,course_name,course_desc,course_content,course_price FROM courses';

$query = mysqli_query($conn, $sql);

$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

echo json_encode($data);
foreach ($data as $course) {
    // echo $course['course_name'];
    // echo json_encode($course);
}


$conn->close();
