<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 10/05/20
 * Time: 23:59
 * https://www.testdome.com/questions/php/pipeline/20304?visibility=17&skillId=5
 */


class Pipeline
{
    public static function make_pipeline(...$funcs)
    {
        return function($arg) use ($funcs)
        {
            foreach ($funcs as $func){
                $pipe=$func($pipe??$arg);
            }
            return $pipe;
        };
    }
}

$fun = Pipeline::make_pipeline(function($x) { return $x * 3; }, function($x) { return $x + 1; },
    function($x) { return $x / 2; });
echo $fun(3); # should print 5