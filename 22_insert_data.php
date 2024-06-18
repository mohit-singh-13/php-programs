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


    // insert a Record into table
    $name = "Rahul";
    $destination = "Delhi";

    // $sql = "INSERT INTO phptrip (sno, name, dest) VALUES (1, 'Jyoti', 'UK'), (2, 'Mohit', 'Nepal'), (3, 'Ajay', 'US'), (4, 'Simran', 'Canada')";
    $sql = "INSERT INTO phptrip (name, dest) VALUES ('$name', '$destination')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "Record inserted successfully <br/>";
    }
    else {
        echo "Record insertion failed <br/>";
    }