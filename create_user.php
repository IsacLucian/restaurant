<?php

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