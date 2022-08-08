<?php
include_once './config.php';
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
// $password = password_hash(
//     mysqli_real_escape_string($conn, $_POST['password']),
//     PASSWORD_DEFAULT
// );
// $verify = password_verify($password, $user['password']);

$messages = array();

if (isset($email) && isset($password)) {
    $sql = "SELECT * FROM users WHERE email = '{$email}'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_all($query, MYSQLI_ASSOC);
    if (mysqli_num_rows($query) > 0) {
        foreach ($data as $user) {
            if ($password == $user['password']) {
                session_start();
                header('Location:/frontend/home.php');
                $_SESSION['user'][] = $user;
            } else {
                array_push($messages, "Your password is wrong");
            }
        }
    }
}
