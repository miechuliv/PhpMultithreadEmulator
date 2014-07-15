<?php
/**
 * Created by JetBrains PhpStorm.
 * User: USER
 * Date: 15.07.14
 * Time: 14:25
 * To change this template use File | Settings | File Templates.
 */
$limit = 10000000;
for($i=0;$i < $limit; ++$i)
{
    $a = 5 * 5;
}

file_put_contents('./writable.txt',file_get_contents('./writable.txt').'long script');
$date = new DateTime();
echo 'long' . $date->format('Y-m-d h:i:s');
