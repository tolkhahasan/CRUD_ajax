<?php
include('database.php');
// echo "<pre>";
// print_r($_POST);

//optional
$id = $_POST['id'];
$nama = mysql_escape_string($_POST['nama']);
$telp = $_POST['telp'];
$posisi = $_POST['posisi'];
$kota = $_POST['kota'];
$kelamin = $_POST['kelamin'];

$sql = "update pegawai set nama='{$nama}', no_telp='{$telp}', id_posisi='{$posisi}', alamat='{$kota}', kelamin={$kelamin} where id_pegawai = '{$id}'";

mysql_query($sql);

header("Location: index.php");