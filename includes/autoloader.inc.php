<?php
spl_autoload_register('myAutoLoader');

function myAutoLoader($classname){
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    # if file (that uses this function) is in includes folder
    if(strpos($url, 'includes') !== false){
        $path="../classes/";
    }else{
        $path="classes/";
    }




    $extention =".class.php";
    $fullPath = $path . $classname . $extention;
    include_once $fullPath;
}