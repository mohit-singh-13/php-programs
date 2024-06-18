<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($servername, $username, $password);
    
    if (!$connection) {
        die("Sorry we failed to connect" . mysqli_connect_error());
    }
    else {
        echo "Database connection is successful <br/><br/>";
    }
    

    // create a DB
    $sql = "CREATE DATABASE IF NOT EXISTS mohitphp";
    $result = mysqli_query($connection, $sql);
    // echo $result . "<br/>";

    if ($result) {
        echo "DB created successfully <br/>";
    }
    else {
        echo "DB not created successfully due to : " . mysqli_error($connection) . "<br/>";
    }