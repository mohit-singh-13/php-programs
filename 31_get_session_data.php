<?php

session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'];
    echo "<br/>";
    echo "Your favourite category is : " . $_SESSION['favCat'];
} else {
    echo "Please try to LOG IN first";
}

echo "<br/>";