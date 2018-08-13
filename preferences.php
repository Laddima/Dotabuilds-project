<?php


define('BASE_URL','https://dotabuilds.000webhostapp.com/');
define('MYSQL','./includes/mysql_connection_link.php');
define('HEADER','./includes/header.php');
define('FOOTER','./includes/footer.php');
define('ADMIN_EMAIL','dotabuilds1@gmail.com');

function between($val, $x, $y){
    $val_len = strlen($val);
    return ($val_len >= $x && $val_len <= $y)?TRUE:FALSE;
}