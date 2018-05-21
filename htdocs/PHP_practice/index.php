<?php

$a=array("red"=>"d",
         "blue"=>"c",
         "white"=>"b",
         "black"=>"a");

ksort($a);

foreach($a as $key=>$value){
    echo $key.":".$value."<br>";
}

?>