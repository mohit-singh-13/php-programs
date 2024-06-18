<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mohitphp";

    $connection = mysqli_connect($servername, $username, $password, $database);
    
    if (!$connection) {
        die("Sorry we failed to connect" . mysqli_connect_error());
    }
    else {
        echo "Database connection is successful <br/><br/>";
    }
    

    // create a Table
    mysqli_select_db($connection, $database);
    $sql = "CREATE TABLE IF NOT EXISTS phptrip (sno INT(6) NOT NULL AUTO_INCREMENT, name VARCHAR(12) NOT NULL, dest VARCHAR(6) NOT NULL, PRIMARY KEY(sno))";

    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "Table created successfully <br/>";
    }
    else {
        echo "Table creation failed <br/>";
    }