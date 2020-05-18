<?php

$grating = "hello"; // $ is the syntax for variable in php
$who = "World";

echo $grating;
echo $who;

echo "<h1>" . $grating . " " . $who . "</h1>"; //dot means merge string in php

$x = 4;
$y = 5;
echo "x = ".$x;
echo "y = ".$y;
echo "z = x + y = ".($x + $y);

//length of string (strlen)
echo "<br>".strlen($grating)."string length<br>";
//word count -- count number of words in that string
echo str_word_count($grating)."string word count<br>";
//string reverse
echo strrev($grating)."string reverse<br>";
//string position
echo strpos($grating, "hello")."word position<br>";
//string replace
echo str_replace($grating, "hello", "byebye")."word replace<br>";
