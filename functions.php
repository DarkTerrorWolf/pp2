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

function removeDups($array){
    $newarray=[$array[0]];
    $check=false;
    foreach ($array as $arr){
        for($i = 0; $i<sizeof($newarray);$i++){
           if($newarray[$i]==$arr){
               echo $arr;
               $check=false;
               break;
           }
           $check=true;
        }
        if($check==true){
            $newarray[]=$arr;
        }

    }
    return $newarray;
}