<?php

class ArrayOrder
{
   
    public static function orderItems(array &$arr) 
    {
    
     usort($arr, function (int $a, int $b) { return ($a <=> $b); });

    }
}

$arr = [2, 1, 3, 6, 5, 4, 7];
ArrayOrder::orderItems($arr);

var_dump($arr);


