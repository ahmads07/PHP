<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create PHP in HTML</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$i = 1; //set counter
while ($i < 100) { //set condition
    echo "<p>Class is over, come back tomorrow</p>"; //do something if condition is true
    $i = $i + 1; //update counter
}
?>
</body>
</html>