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

    $sql = "SELECT * FROM phptrip";
    $result = mysqli_query($connection, $sql);

    // find the number of records returned
    $num = mysqli_num_rows($result);
    echo "<br/>" . $num . " records found in Database" . "<br/>";

    // display the rows returned by the sql query
    /*if ($num > 0) {
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);

        echo "<br/>";
        
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
        
        echo "<br/>";
        
        $row = mysqli_fetch_assoc($result);
        echo var_dump($row);
    }*/

    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // echo var_dump($row);

            echo "<br/>";

            echo $row['sno'] . " Hello " . $row['name'] . " welcome to " . $row['dest'];

            echo "<br/>";
        }
    }