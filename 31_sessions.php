<?php

echo "PHP tutorial on Sessions" . "<br/><br/>";

// verify the user login information
session_start();
$_SESSION['username'] = "Mohit";
$_SESSION['favCat'] = "Books";

echo "We have saved your session";