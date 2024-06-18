<?php
    echo "PHP tutorial on Associative Arrays <br/><br/>";

    $favCol = array(
        "Jyoti" => "white", 
        "Mohit" => "green", 
        "Ajay" => "red", 
        "Simran" => "yellow"
    );

    echo $favCol['Jyoti'] . "<br/>";
    echo $favCol['Mohit'] . "<br/>";

    echo "<br/>";
    
    echo "for-each loop on associative array <br/>";

    foreach($favCol as $key => $value) {
        echo "Favourite color of $key is : $value <br/>";
    }