<?php

function printArr($numbers){
    echo "<p>";
    foreach ($numbers as $number){
        echo "$number<br>";
    }
    echo"<p>";
}

function largest($array){
    $largest =$array[0];
    foreach ($array as $arr){
        if($largest < $arr){
            $largest = $arr;
        }
    }
    return $largest;
}