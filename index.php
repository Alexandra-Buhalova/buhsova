<?php

include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'buhsova/LineUr.php';
include_once 'buhsova/KvadrUr.php';
include_once 'buhsova/BuhsovaException.php';
include_once 'buhsova/MyLog.php';

$arr=array();

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new buhsova\KvadrUr($arr[0], $arr[1], $arr[2]);
    $roots = $solver->KvadrUr($arr[0], $arr[1], $arr[2]);
    if (is_array($roots)) {
        buhsova\MyLog::log("roots: " . $roots[0] . " " . $roots[1]);
    } else {
        buhsova\MyLog::log("root: " . $roots);
    }
}catch(buhsova\BuhsovaException $e) {

    buhsova\MyLog::log($e->getMessage());
}
buhsova\MyLog::write();
