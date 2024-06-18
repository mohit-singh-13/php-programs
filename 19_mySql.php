<?php
    // step 1
    $servername = "localhost";
    $username = "root";
    $password = "";

    // step 2
    $connection = mysqli_connect($servername, $username, $password);

    if (!$connection) {
        die("Sorry we failed to connect" . mysqli_connect_error());
        // die("MOHIT SINGH THAPA". mysqli_connect_error());
        // echo "MOHIT SINGH THAPA";
    }
    else {
        echo "Database connection is successful <br/>";
    }