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

    $sql = "SELECT * FROM phptrip WHERE dest='Delhi'";
    $result = mysqli_query($connection, $sql);

    $num = mysqli_num_rows($result);
    $no = 1;

    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br/>";

            echo $no . " Hello " . $row['name'] . " welcome to " . $row['dest'];

            $no += 1;
            echo "<br/>";
        }
    }
    echo "<br/>";

    $sql = "UPDATE phptrip SET dest='US' WHERE sno=3";
    $result = mysqli_query($connection, $sql);

    $aff = mysqli_affected_rows($connection) . "<br/>";
    echo "Number of affected rows: $aff";

    if ($result) {
        echo "We updated the record successfully";
    }
    else {
        echo "We could not updated the record successfully";
    }