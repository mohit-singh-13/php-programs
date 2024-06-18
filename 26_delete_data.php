<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "mohitphp";

    $connection = mysqli_connect($servername, $username, $password, $database);

    if (!$connection) {
        die("Sorry we failed to connect : " . mysqli_connect_error());
    } else {
        echo "Connection is successful <br/>";
    }
    echo "<br/>";

    $sql = "DELETE FROM phptrip WHERE name='temp'";
    $result = mysqli_query($connection, $sql);
    $aff = mysqli_affected_rows($connection);

    echo "Number of affected rows : $aff <br/>"; 

    if ($result) {
        echo "Record deleted successfully";
    }
    else {
        echo "Could not deleted record";
    }