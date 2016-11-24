<?php include('database.php'); ?>

<?php

$sql_posisi = "select * from posisi";
$result_posisi = mysql_query($sql_posisi);

$sql_kota = "select * from kota";
$result_kota = mysql_query($sql_kota);

$id = $_GET['id'];

$sql = "select
    pg.id_pegawai as id_pegawai,
    pg.nama as nama_pegawai,
    pg.no_telp,
    pg.alamat,
    pg.kelamin as id_kelamin,
    kl.nama as jenis_kelamin,
    po.nama as posisi,
    po.id_posisi as posisi_id
from 
    pegawai pg, kelamin kl, posisi po 
where 
    pg.id_pegawai = '{$id}' and
    pg.kelamin = kl.id and 
    pg.id_posisi = po.id_posisi";

$result_pegawai = mysql_query($sql);
$data_pegawai = mysql_fetch_array($result_pegawai);

?>

<h1>Update Data Pegawai</h1>

<a href="index.php">Kembali</a>

<form action="proses_update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data_pegawai['id_pegawai']; ?>">
    Nama: <input type="text" name="nama" value="<?php echo $data_pegawai['nama_pegawai'] ?>">
    <br>
    Telp: <input type="text" name="telp" value="<?php echo $data_pegawai['no_telp'] ?>">
    <br>
    Posisi:
    id posisi si pegawai <?php echo $data_pegawai['posisi_id'] ?>
    <select name="posisi">
        <?php while($data_posisi = mysql_fetch_array($result_posisi)) { ?>
        <option value="<?php echo $data_posisi['id_posisi'] ?>" 
        <?php if($data_pegawai['posisi_id'] == $data_posisi['id_posisi']) echo "selected" ?>>
            <?php echo $data_posisi['nama'] ?>
        </option>
        <?php } ?>
    </select>

    <br>

    Asal Kota:
    <select name="kota">
        <?php while($data_kota = mysql_fetch_array($result_kota)) { ?>
        <option value="<?php echo $data_kota['id'] ?>" 
        <?php if($data_pegawai['alamat'] == $data_kota['id']) echo "selected" ?>>
            <?php echo $data_kota['nama'] ?>
        </option>
        <?php } ?>
    </select>

    <br>
    Jenis Kelamin
    <input type="radio" name="kelamin" value="1" <?php if($data_pegawai['id_kelamin'] == 1){ echo "checked";} ?>> Laki Laki
    <input type="radio" name="kelamin" value="2" <?php if($data_pegawai['id_kelamin'] == 2){ echo "checked";} ?>> Perempuan
    
    <!-- <select name="" id="">
        <option value="">Toyota</option>
        <option value="">Daihatsu</option>
        <option value="" selected>Honda</option>
        <option value="">Suzuki</option>
    </select> -->
    <br>
    <input type="submit" value="Tambah Data">


</form>