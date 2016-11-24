<?php include('database.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Facebook abal-abal  </title>
    <link rel="icon" type="image/jpg" href="f.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<?php
    $sql = "select pegawai.id_pegawai as id, pegawai.nama as nama_pegawai, posisi.nama as nama_posisi from pegawai, posisi where pegawai.id_posisi = posisi.id_posisi";
    if(@$_GET['q']) {
        $search = $_GET['q'];
        $sql .= " and (pegawai.nama like '%{$search}%' or posisi.nama like '%{$search}%')";
    }
    $result = mysql_query($sql);
?>

<div class="row">
<div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="tambah.php">ADD Data</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" action="index.php" method="GET">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search" name="q" 
                    value="<?php echo @$_GET['q'] ?>">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>
</div>




<div class="row">
<div class="container">
<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Posisi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php while($data = mysql_fetch_array($result)): ?>
        <tr>
            <td><?php echo $data['nama_pegawai'] ?></td>
            <td><?php echo $data['nama_posisi'] ?></td>
            <td>
                <a href="update.php?id=<?php echo $data['id'] ?>">Update</a>

                <a href="delete.php?id=<?php echo $data['id'] ?>">Hapus</a>
                
                <a href="detail.php?id=<?php echo $data['id'] ?>">Detail</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table> 
</div>
</div>


</body>
</html>