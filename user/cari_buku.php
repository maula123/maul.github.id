<?php
include '../koneksi.php';

if($_POST)
{
    $cari = $_POST['cari'];
    $query = "SELECT * FROM input_buku WHERE judul LIKE '%$cari%'";
    $exe = mysqli_query($con,$query);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../aset/style1.css">
    <title>PERPUSTAKAN Maula Al Falaqi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" type="text/css">
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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="cari_buku.php">Cari Buku</a></li>
            <li> <a href="pinjam_buku.php">Pinjam buku</a></li>
            <li><a href="tabel_pinjam.php">Tabel pinjam</a></li>
            <li><a href="info.php">Info</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<!-- label-->
<section class="label">
    <div class="container">
        <p>Home/Cari Buku</p>
    </div>
</section>

<!--abaout-->
<section class="about">
    <div class="container">
        <form action="cari_buku.php" method="post">
                <div class="button">
                    <input autocomplete="off" type="text" name="cari" placeholder="cari berdasarkan judul buku" style="width: 23%">
                    <button type="submit" style="background-color: #ff5722; padding: 5px 0; color: white; width: 8%; border-radius: 2px">cari</button>
                </div>

            <div id="customers">
                <table>
                    <thead>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Rak Buku</th>
                    <th>Status</th>
                    <th>Tahun Terbit</th>
                    </thead>

                    <tbody>
                    <?php
                    if($_POST)
                    {
                        $n=0;
                        while($fetch = mysqli_fetch_array($exe))
                        {
                            $n++;
                            ?>
                            <tr>
                                <td><?= $n ?></td>
                                <td><?= $fetch['judul'] ?></td>
                                <td><?= $fetch['nama_pengarang'] ?></td>
                                <td><?= $fetch['penerbit'] ?></td>
                                <td><?= $fetch['tempat_buku'] ?></td>
                                <td><?= $fetch['status'] ?></td>
                                <td><?= $fetch['tahun_terbit'] ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
</section>

<!--fo0ter-->
<footer style="margin-top: 210px">
    <div class="container">
        <small>copyright &copy 2020, Maula Al Falaqi All  Rights Reseverd</small>
    </div>
</footer>


</body>
</html>
