<?php

define('BASE_URL', 'https://dotabuilds.000webhostapp.com/');
define('MYSQL', './mysql_connection_link.php');
define('HEADER', './header.php');
define('FOOTER', './footer.php');
define('ADMIN_EMAIL', 'dotabuilds1@gmail.com');

function between($val, $x, $y){
    $val_len = strlen($val);
    return ($val_len >= $x && $var_len <= $y)?TRUE:FALSE;
}
