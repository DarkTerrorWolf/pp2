<?php

/*
 *
Name: Tylor Schlosser
Date: 04/17/2020
Url: https://tschlosser.greenriverdev.com/328/pairPrograms/pp2/index.php
*/

//error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<h1> Pair program 2</h1>
<?php
echo "PHP Array Practice.";
$numbers = [7,9,8,9,8,8,6];

function printArr($numbers){
    echo "<p>";
    foreach ($numbers as $number){
        echo "$number<br>";
    }
    echo"<p>";
}
printArr($numbers);
?>

</body>
</html>

