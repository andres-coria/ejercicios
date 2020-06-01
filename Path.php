<?php
/**
 * Created by PhpStorm.
 * User: andres
 * Date: 10/05/20
 * Time: 21:08
 * https://www.testdome.com/questions/php/path/23375?visibility=17&skillId=5
 */


class Path
{
    public $currentPath;

    function __construct(string $path)
    {
        $this->currentPath = $path;
    }

    public function cd(string $newPath) : void
    {

        $a=explode("/",$newPath);

        if ($a[0]!=="") {

            $b = explode("/", $this->currentPath);

            foreach ($a as $dir) {

                if ($dir === "..") {
                    array_pop($b);

                } elseif (ctype_alpha($dir)) {
                    array_push($b, $dir);
                }
            }

            $this->currentPath=implode("/",$b);
        }
        else{
            $this->currentPath=$newPath;
        }
        return;
    }
}

$path = new Path('/a/b/c/d');
$path->cd('ssdv/htfd');
echo $path->currentPath;