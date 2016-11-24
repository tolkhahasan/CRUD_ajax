<?php

include('database.php');

$id = $_GET['id'];

$sql = "select
    pg.nama as nama_pegawai,
    pg.no_telp,
    pg.alamat,
    kl.nama as jenis_kelamin,
    po.nama as posisi
from 
    pegawai pg, kelamin kl, posisi po 
where 
    pg.id_pegawai = '{$id}' and
    pg.kelamin = kl.id and 
    pg.id_posisi = po.id_posisi";

$result = mysql_query($sql);
$data = mysql_fetch_array($result);

?>

<h1>Detail Pegawai</h1>
<a href="index.php">Kembali</a>
<br>
Nama: <?php echo $data['nama_pegawai'] ?> <br>
No Telp: <?php echo $data['no_telp'] ?> <br>
Alamat: <?php echo $data['alamat'] ?> <br>
Jenis Kelamin: <?php echo $data['jenis_kelamin'] ?> <br>
Posisi: <?php echo $data['posisi'] ?>




