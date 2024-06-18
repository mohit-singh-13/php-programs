<?php
    $name = "Mohit Singh";
    echo "$name <br/>";

    echo strlen($name) . "<br/>";
    echo "The length of my string is " . strlen($name);
    echo "<br/>";
    
    echo str_word_count($name);
    echo "<br/>";
    
    echo strrev($name);
    echo "<br/>";
    
    echo strpos($name, "hi");
    echo "<br/>";

    echo str_replace("Mohit", "Rohit", $name);
    echo "<br/>";

    echo str_repeat($name, 13);
    echo "<br/>";

    echo rtrim("<pre> He is a good boy </pre>");
    echo "<br/>";
    echo "<br/>";

