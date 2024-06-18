<?php
    $a = 13;
    $b = 27;

    echo "ARITHMETIC OPERATORS :- <br/>";
    echo "$a + $b is " . $a+$b . "<br/>";
    echo "$a - $b is " . $a-$b . "<br/>";
    echo "$a * $b is " . $a*$b . "<br/>";
    echo "$a / $b is " . $a/$b . "<br/>";

    echo "$a % $b is " . $a%$b . "<br/>";
    echo "$a ** $b is " . $a**$b . "<br/>";

    echo "<br/>";

    echo "ASSIGNMENT OPERATORS :- <br/>";
    $x = $a;
    echo "Value of x is " . $x . "<br/>";
    $x += 6;
    echo "Value of x is " . $x . "<br/>";

    echo "<br/>";
    
    echo "COMPARISON OPERATORS :- <br/>";
    $x = 7;
    $y = 9;
    echo "(x == y) ? ";
    echo var_dump($x == $y) . "<br/>";
    
    echo "(x <> y) ? ";
    echo var_dump($x <> $y) . "<br/>";
    
    echo "<br/>";

    echo "LOGICAL OPERATORS :- <br/>";
    $m = true;
    $n = false;

    echo "m AND n ";
    echo var_dump($m and $n) . "<br/>";
    echo var_dump($m && $n) . "<br/>";
    echo "m OR n ";
    echo var_dump($m or $n) . "<br/>";
    echo var_dump($m || $n) . "<br/>";