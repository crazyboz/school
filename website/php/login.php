<?php
include 'connection.php';

$username = $_POST["username"];
$password = $_POST['password'];
$sql = "select * from login where username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);

if ($count == 1) {
    header("Location: ../form.html");
} else {
    echo "invalid password";
    //header('Location: ' . $_SERVER['HTTP_REFERER']);
}
