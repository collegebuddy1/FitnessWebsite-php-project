<?php

define('DB_Host','localhost');
define('DB_user', 'root');
define('DB_pass', '');
define('DB_name', 'fitness');

$connect=mysqli_connect(DB_Host,DB_user,DB_pass,DB_name);
if(!$connect){
    echo 'error';
}






?>