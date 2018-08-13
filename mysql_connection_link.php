<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('DB_USER','id6715962_admin');
define('DB_PASSWORD', 'testing');
define('DB_HOST','localhost');
define('DB_NAME','id6715962_reg_log');

        
$dbcl = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($dbcl->connect_error){
    die('Could not connect to MYSQL: '.$dbcl->connect_error);
}else{
    $dbcl->set_charset('utf8');
}