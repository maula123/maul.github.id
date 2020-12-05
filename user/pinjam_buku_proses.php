<?php
include '../koneksi.php';
if(!empty($_GET['id']))
{
    $id = $_GET['id'];
    $query = "SELECT * FROM input_buku WHERE id_buku = '$id'";
    $exe = mysqli_query($con,$query);
    $fetch = mysqli_fetch_array($exe);
}
else{
    header("location:pinjam_buku.php?gagal");
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
<!--loader-->
<div class="bg-loader">
    <div class="loader">

    </div>
</div>
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
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="cari_buku.php">Cari Buku</a></li>
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
        <p>Home/Pinjam Buku</p>
    </div>
</section>

<!--abaout-->
<section class="about">
    <div class="container">

                <div class="container1">
                    <form action="proses_pinjam.php" method="post">
                        <h3 style="color: #333333"><a>Form pinjam Buku</a></h3>
                        <div class="row">
                            <div class="col-25">
                                <input type="hidden" name="id_buku" placeholder="nama pinjam" required value="<?= $id ?>">
                                <label for="fname">Nama lengkap</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="nama" placeholder="nama lengkap..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Tanggal Pinjam</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="lname"  name="pinjam" placeholder="tanggal pinjam..">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">TanggalKembali</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="lname" name="kembali" placeholder="tanggal kembali..">
                                <input type="hidden" name="status" value="belum dipinjam">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px; margin-right: 170px">
                            <input type="submit" value="Pinjam">
                        </div>
                    </form>
                </div>

            </div>



</section>

<!--fo0ter-->
<footer style="margin-top: 210px">
    <div class="container">
        <small>copyright &copy 2020, Maula Al Falaqi All  Rights Reseverd</small>
    </div>
</footer>


</body>
<script>
    $(document).ready(function () {
        $(".bg-loader").hide();
    });
</script>
</html>

