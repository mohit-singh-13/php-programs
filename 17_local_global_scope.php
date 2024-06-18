<?php
    echo "PHP tutorial on Local and Global scope <br/><br/>";

    $a = 98;

    function printValue() {
        // $a = 90;
        global $a;
        // $a = 1000;
        echo "The value of a is : $a <br/>";
    }

    printValue();
    echo "The value of Global a is : $a <br/>";

    echo var_dump($GLOBALS);