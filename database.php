<?php

error_reporting();

$host = 'localhost';
$user = 'root';
$pass = '';

$conn = mysql_connect($host, $user, $pass);

mysql_select_db("cendana");