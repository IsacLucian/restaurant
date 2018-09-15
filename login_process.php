<?php

session_start();

include 'Connection/connect.php';

/* GET DATA */

$email = $_POST['username'];
$password = $_POST['password'];

/* Validations */

if ($email == '') {
    echo "<h3 style='color: red'>" . 'Username field is required.' . "</h3>";
}

if ($password == '') {
    echo "<h3 style='color: red'>" . 'Password field is required.' . "</h3>";
}

$sql = "SELECT name, email, pass FROM users WHERE email='$email'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$userPassword = $row['pass'];

if ($password == $userPassword) {
    $_SESSION['logged_user_name'] = $row['name'];
    header('Location: /');
    die;
}
    $_SESSION['login_error'] = true;
    header('Location: login.php');
    echo 'Invalid username or password.';
