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

function distribution($array){
    $newArr = [];
    foreach ($array as $arr){
        $count =0;
        for($i=0;$i<sizeof($array);$i++){
            if($arr == $array[$i]){
                $count++;
            }
        }
        $go = true;
        foreach ($newArr as $nr){
            if($nr == $arr){
                $go = false;
                break;
            }
        }
        if($go==true) {

            $newArr[$arr]=$count;
        }
    }
     ksort($newArr);
    return $newArr;

}