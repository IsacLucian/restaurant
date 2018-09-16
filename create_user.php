<?php

<<<<<<< HEAD
include 'Connection/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$admin = false;
$created_at = null;
$updated_at = null;

$sql = "INSERT INTO users(name, email, pass, phone, admin) VALUES('$name', '$email', '$password', '$phone', '$admin')";

$result = mysqli_query($conn, $sql);

if ($result) {
    die('DONE');
} else {
    die($conn->error);
}
=======
    include_once 'Connection/connect.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO users(name, email, pass, phone) VALUES('$name', '$email', '$pass', '$phone')";

    if(mysqli_query($conn, $sql) == FALSE){
        echo "Error: " . mysqli_error($conn);
    }

    header ("Location: /");
>>>>>>> 1018418ca7724e1c60681ea468dba9ed5f2d94e1
