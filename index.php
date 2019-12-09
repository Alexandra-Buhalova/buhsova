<?php

include_once'core/EquationInterface.php';
include_once'core/LogInterface.php';
include_once'core/LogAbstract.php';
include_once 'buhsova/LineUr.php';
include_once 'buhsova/KvadrUr.php';
include_once 'buhsova/BuhsovaException.php';
include_once 'buhsova/MyLog.php';

$arr=array();

buhsova\MyLog::log('Version '.file_get_contents('./version'));

$arr[] = readline("a= ");
$arr[] = readline("b= ");
$arr[] = readline("c= ");

try {
    $solver = new buhsova\KvadrUr();
	$roots = $solver->solve($arr[0], $arr[1], $arr[2]);

    buhsova\MyLog::log("roots: " . implode(" , ", $roots));
   
}catch(buhsova\BuhsovaException $e) {

    buhsova\MyLog::log($e->getMessage());
}
buhsova\MyLog::write();
