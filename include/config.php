<?php


define('DB_HOST',       'localhost');
define('DB_NAME',       'maker_club');
define('DB_USER',       'root');
define('DB_PASSWORD',   '');


$dbConnect = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>