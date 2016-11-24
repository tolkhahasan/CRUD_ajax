<?php

include('database.php');

//optional
date_default_timezone_set('Asia/Jakarta');

$nama = $_POST['nama'];
$posisi = $_POST['posisi'];
// generate id dengan menggunakan php dengan fungsi current date + random
$id = md5(date('ymdhms').rand());

$sql = "insert into pegawai(id_pegawai,nama,id_posisi) values('$id', '$nama', '$posisi')";
mysql_query($sql);

header("Location: index.php");