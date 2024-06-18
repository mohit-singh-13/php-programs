<?php
    echo "while loop in php" . "<br/>";

    $i = 1;
    while($i <= 5) {
        echo $i;
        echo "<br/>";
        $i++;
    }

    echo "<br/>";
    
    echo "for loop in php <br/>";

    for ($i=1 ; $i<=5 ; $i++) {
        echo $i;
        echo "<br/>";
    }

    echo "<br/>";

    echo "do-while loop in php <br/>";

    $i = 1;
    do {
        echo $i . "<br/>";
        $i++;
    } while($i <= 5);

    echo "<br/>";

    echo "for-each loop in php <br/>";

    $arr = array("bananas", 1, "apples", "harpic", "bread", 1.35);

    /*for ($i=0 ; $i < count($arr) ; $i++) {
        echo $arr[$i];
        echo "<br/>";
    }*/

    foreach ($arr as $value) {
        echo "$value <br/>";
    }