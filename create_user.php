<?php

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
