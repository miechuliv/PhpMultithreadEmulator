<?php
/**
 * Created by JetBrains PhpStorm.
 * User: USER
 * Date: 15.07.14
 * Time: 13:56
 * To change this template use File | Settings | File Templates.
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');
var_dump(PHP_OS);

echo 'start';
/* = new COM('WScript.Shell');
$oExec = $WshShell->Run('php ./script.php', 0, false);
var_dump($oExec);*/
$outputLong = array();
$outputShort = array();
//exec('C:\xampp\php\php.exe C:\xampp\htdocs\PhpMultithreadEmulator\script.php',$output);
//exec('php script2.php > ./writable.txt &');
//exec('php script.php > ./writable.txt &');

// long running script should finish last
//passthru('php script2.php > ./writable.txt &');
pclose(popen("start php.exe script2.php","r"));
// short running script should finish first
//passthru('php script.php > ./writable2.txt &');
pclose(popen("start php.exe script.php","r"));

echo 'stop';