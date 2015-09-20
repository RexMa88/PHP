<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/9/18
 * Time: 10:45
 */
    $sortArray = array();
    for($i = 0;$i < 10;$i++){
        $num = rand(1,100);
        array_push($sortArray,$num);
    }

    sort($sortArray);
    foreach($sortArray as $value){
        echo "$value<br>";
    }

    rsort($sortArray);
    echo "<br><br>";
    foreach($sortArray as $value){
        echo "$value<br>";
    }
?>