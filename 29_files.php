<?php

$fptr = fopen("28_file.txt", "r");
// echo $fptr;

if (!$fptr) {
    die("Unable to open this file.");
}

$content = fread($fptr, filesize("28_file.txt"));
echo $content;

fclose($fptr);
echo "<br/><br/><br/>";


echo "<b>Using fgets():-</b> <br/>";
$fptr = fopen("28_file.txt", "r");
echo fgets($fptr);
echo fgets($fptr);

fclose($fptr);
echo "<br/><br/><br/>";


echo "<b>Using fgetc():-</b> <br/>";

$fptr = fopen("28_file.txt", "r");
echo fgetc($fptr);
echo fgetc($fptr);
echo fgetc($fptr);

while ($a = fgetc($fptr)) {
    echo $a;
}

fclose($fptr);
echo "<br/><br/><br/>";


echo "<b>Writing and Appending to files:-</b> <br/>";
$fptr = fopen("29_files.txt", "w");

fwrite($fptr, "Hey buddy Mohit");

fclose($fptr);


$fptr = fopen("29_files.txt", "a");
fwrite($fptr, " Wowwwwww");

fclose($fptr);
