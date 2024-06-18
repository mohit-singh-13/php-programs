<?php

// include "_dbconnect.php";
require "_dbconnect.php";
echo "<br/>";

// echo "MOHIT SINGH";

$sql = "SELECT * FROM phptrip";
$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['sno'] . " " . $row['name'] . " " . $row['dest'] . "<br/>";
}