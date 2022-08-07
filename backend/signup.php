<?php
include_once './config.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['pass1']);

if (!empty($name) && !empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        echo "$email : is already exist";
    } else {
        echo "$email : is not exist";
        $sql = mysqli_query($conn, "INSERT INTO users (name,email,password) VALUES('{$name}', '{$email}','{$password}')");
    }
}
