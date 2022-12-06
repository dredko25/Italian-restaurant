<?php
    $host = 'localhost';
    $db = 'Italian_restaurant';
    $user = 'root';
    $pass = ')8v0OlKjf/SvN]3*';
    $charset = 'utf8';

    $connection = mysqli_connect($host, $user, $pass, $db);
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
