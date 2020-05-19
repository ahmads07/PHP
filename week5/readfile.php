<?php

$file = fopen("helloworld.txt", 'r'); //fopen all programming language for file open, r means read only,
                                                        //w is write, a is append
while (!feof($file)){
    echo fgets($file)."<br>";
}
fclose($file);
