<?php

    $servername = 'restaurant.com';
    $username = 'root';
    $pass = '';
    $dbname = 'restaurant';

    $conn = mysqli_connect($servername, $username, $pass, $dbname);

    if(!$conn){
        die ('Error: ' . mysqli_connect_error());
    }