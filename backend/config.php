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
