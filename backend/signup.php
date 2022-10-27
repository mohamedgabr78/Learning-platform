<?php
include_once './config.php';

//get value from the sign up form.
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['pass1']);



if (isset($name) && isset($email) && isset($password)) {
    $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) {

        //if the are a matching email, send a query params that this email is already exist.
        // and redirect the user to the login page.
        header('Location:/frontend/login.php?email_exists=true');
    } else {

        //if the is no matching
        //create a new user and insert data to database.
        //and redirect this user to the home page.
        header('Location:/frontend/home.php');
        $sql = mysqli_query($conn, "INSERT INTO users (user_name,email,password) VALUES('{$name}', '{$email}','{$password}')");
    }
}
