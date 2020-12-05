<?php
include '../koneksi.php';
$id = $_GET['id'];
$update = mysqli_query($con,"SELECT * FROM input_buku WHERE id_buku = '$id'");
$ambil2 = mysqli_fetch_array($update);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../aset/style1.css">
    <title>PERPUSTAKAN Maula Al Falaqi</title>
<body>
<!--header-->
<div class="medsos">
    <div class="container">
        <ul>
            <li><a href=""></a><i class="fab fa-facebook"></i></li>
            <li> <a href=""></a><i class="fab fa-youtube"></i></li>
            <li> <a href=""></a><i class="fab fa-instagram"></i></li>
        </ul>
    </div>
</div>
<header>
    <div class="container">
        <h2><a href="index.php">Perpustakan Maula Al Falaqi</a></h2>
        <ul>
            <li ><a href="index.php">Home</a></li>
            <li><a href="cari_buku.php">Cari Buku</a></li>
            <li class="active"> <a href="input_buku.php">Input Buku</a></li>
            <li><a href="tabel_buku.php">Tabel pinjam</a></li>
            <li><a href="info.php">Info</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<!-- label-->
<section class="label">
    <div class="container">
        <p>Home/Pinjam Buku</p>
    </div>
</section>

<!--abaout-->
<section class="about">
    <from class="container">
        <div class="login-bapak">
            <form action="proses_update.php" method="post">
                <div class="part">
                    <h1 style="margin-left: 120px"> Silahkan Isi Data </h1>
                </div>
                <br>
                <br>
                <div class="part-1">
                    <h1> Nama Pengarang  </h1>
                    <input type="text" hidden name="id" value="<?=$ambil2['id_buku']?>">
                    <input type="text"autocomplete="off" value="<?=$ambil2['nama_pengarang']?>" name="nama" placeholder="nama pengarang" required>
                    <h1> Judul  </h1>
                    <input type="text" autocomplete="off" value="<?=$ambil2['judul']?>" name="judul" placeholder="judul buku " required>
                    <h1> Penerbit   </h1>
                    <input type="text" autocomplete="off" name="penerbit"  value="<?=$ambil2['penerbit']?>" placeholder="penerbit" required>
                    <h1> Tempat Buku </h1>
                    <input type="text" autocomplete="off" name="tempat" value="<?=$ambil2['tempat_buku']?>" placeholder="tempat buku " required>
                    <h1> Status   </h1>
                    <input type="text" autocomplete="off" name="status" value="<?=$ambil2['status']?>" placeholder="status" required>
                    <h1> Tahun Terbit  </h1>
                    <input type="text" autocomplete="off" name="tahun"  value="<?=$ambil2['tahun_terbit']?>" placeholder="tahun terbit " required>

                    <button  style="text-decoration: none; width: 30%; background-color: #ff5722;"  type="submit">Update Data </button>
                </div>
        </div>
        </div>
    </from>
</section>

<!--fo0ter-->
<footer style="margin-top: 210px">
    <div class="container">
        <small>copyright &copy 2020, Maula Al Falaqi All  Rights Reseverd</small>
    </div>
</footer>


</body>
</html>
