<?php
include_once './config.php';
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['pass1']);

$uid = "u" . strval(rand(1, 20));

if (isset($name) && isset($email) && isset($password)) {
    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {
        header('Location:/frontend/login.php?email_exists=true');
    } else {
        header('Location:/frontend/home.php');
        $sql = mysqli_query($conn, "INSERT INTO users (user_id,user_name,email,password) VALUES('{$uid}','{$name}', '{$email}','{$password}')");
    }
}
