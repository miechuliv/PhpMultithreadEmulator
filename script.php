<?php
/**
 * Created by JetBrains PhpStorm.
 * User: USER
 * Date: 15.07.14
 * Time: 13:57
 * To change this template use File | Settings | File Templates.
 */

file_put_contents('./writable.txt',file_get_contents('./writable.txt').'short script');
$date = new DateTime();
echo 'short' . $date->format('Y-m-d h:i:s');