<?php
require_once('db_access.php');
$link = mysqli_connect($host,$user,$pass,$db);

if(!$link) {
    die('<h1>Database Connection Error</h1>');
}