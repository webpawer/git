<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.11.16
 * Time: 7:52
 */

$hui = "zalupa";

function pizda($caunt, $vlue){

    global $hui;

    return $hui = "trach";

}

$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum();
echo $b;

phpinfo();
