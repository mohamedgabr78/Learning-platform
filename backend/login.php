<?php
include_once './config.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (isset($email) && isset($password)) {
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    if (mysqli_num_rows($query) > 0) {
        foreach ($data as $user) {
            if ($password == $user['password']) {
                header('Location:/frontend/home.php');
                $_SESSION['user'] = $user;
            } else {
                $_SESSION['errors'] = array("<div class='wrong_password'>You entered an incorrect password</div>");
                header('Location:/frontend/login.php?');
            }
        }
    }
}
