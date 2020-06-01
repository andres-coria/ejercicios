<?php

class ArraySearch
{
      static  $count=0;

    public static function countItems(array $arr, string $item) : int
    {
       foreach ($arr as $element) {

           if (is_array($element)) {
               ArraySearch::countItems($element, $item);
           } else {
               if ($element === $item) {
                   self::$count++;
               }

           }

       }

       return self::$count;

    }
}

$arr = [
    "apple",
    ["banana", "strawberry", "apple"],"apple","banana",["banana", "strawberry", "apple",[ "apple",[ "apple","roquefort"]]]
];
echo ArraySearch::countItems($arr, "strawberry");