<?php

include('database.php');

$id = $_GET['id'];

$sql = "delete from pegawai where id_pegawai = '{$id}'";

mysql_query($sql);

// redirect
header('Location: index.php');
