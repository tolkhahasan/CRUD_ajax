<?php include('database.php'); ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Facebook abal-abal  </title>
    <link rel="icon" type="image/jpg" href="f.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    


<?php

$sql_posisi = "select * from posisi";
$result_posisi = mysql_query($sql_posisi);

$sql_kota = "select * from kota";
$result_kota = mysql_query($sql_kota);

?>

<h1>Form Tambah Data Pegawai</h1>

<a href="index.php">Kembali</a>

<div class="row">
    <div class="container">
        <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <form action="proses_tambah.php" method="POST">
    
    Nama: <input class="form-control" type="text" name="nama">
    <br>
    Posisi:
    <select name="posisi">
        <?php while($data_posisi = mysql_fetch_array($result_posisi)) { ?>
        <option value="<?php echo $data_posisi['id_posisi'] ?>">
            <?php echo $data_posisi['nama'] ?>
        </option>
        <?php } ?>
    </select>

    <br>

    Asal Kota:
    <select name="kota">
        <?php while($data_kota = mysql_fetch_array($result_kota)) { ?>
        <option value="<?php echo $data_kota['id'] ?>">
            <?php echo $data_kota['nama'] ?>
        </option>
        <?php } ?>
    </select>

    <br>
    Jenis Kelamin
    <input type="radio" name="kelamin" value="1"> Laki Laki
    <input type="radio" name="kelamin" value="2"> Perempuan
    <input type="radio" name="kelamin" value="3"> tidak tahu

    <!-- <input type="submit" value="Tambah Data"> -->
    <button type="submit" class="btn btn-danger">Tambah</button>


</form>
        </div>
    </div>


</div>





</body>
</html>