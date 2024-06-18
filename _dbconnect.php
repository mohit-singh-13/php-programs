<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mohitphp";

    try {
        $connection = mysqli_connect($servername, $username, $password, $dbname);
        echo "Connection is successful to Database <br/>";
    }
    catch (Exception $e) {
        echo "Failed to connect to Database due to : " . $e->getMessage() . "<br/>";
    }