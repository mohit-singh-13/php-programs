<?php
    echo "PHP tutorial on Multi-Dimensional Arrays <br/> <br/>";

    $multiDim = array(
        array(2, 5, 7, 8),
        array(1, 2, 3, 1),
        array(4, 5, 0, 1),
    );

    // echo var_dump($multiDim);

    for ($i=0 ; $i<count($multiDim) ; $i++) {
        for ($j=0 ; $j<count($multiDim[$i]) ; $j++) {
            echo $multiDim[$i][$j] . " ";
        }
        echo "<br/>";
    }