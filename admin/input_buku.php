
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../aset/style1.css">
    <title>PERPUSTAKAN Maula Al Falaqi</title>
<body>
<!--header-->
<header>
    <div class="container">
        <h2><a href="index.php">Admin Perpustakan Maula al falaqi</a></h2>
        <ul>
            <li ><a href="index.php">Home</a></li>
            <li><a href="cari_buku.php">Cari Buku</a></li>
            <li class="active"> <a href="input_buku.php">Input buku</a></li>
            <li><a href="tabel_buku.php">Tabel Buku</a></li>
            <li><a href="tabel_pinjam_user.php">Tabel pinjam</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<!-- label-->
<section class="label">
   <div class="container">
       <p>Home/Input data Buku</p>
   </div>
</section>

<!--abaout-->
<section class="about">
            <from class="container">
                <div class="login-bapak"  style="margin-left: 400px">
                    <form action="proses_input_buku.php" method="post">
                        <div class="part">
                            <h1 style="margin-left: 120px"> Silahkan Isi Data </h1>
                        </div>
                        <br>
                        <br>
                        <div class="part-1">
                            <h1> Nama Pengarang  </h1>
                            <input type="text"autocomplete="off" name="nama" placeholder="nama pengarang" required>
                            <h1> Judul  </h1>
                            <input type="text" autocomplete="off" name="judul" placeholder="judul buku " required>
                            <h1> Penerbit   </h1>
                            <input type="text" autocomplete="off" name="penerbit" placeholder="penerbit" required>
                            <h1> Tempat Buku </h1>
                            <input type="text" autocomplete="off" name="tempat" placeholder="tempat buku " required>
                            <h1> Status   </h1>
                            <input type="text" autocomplete="off" name="status" placeholder="status" required>
                            <h1> Tahun Terbit  </h1>
                            <input type="text" autocomplete="off" name="tahun"  placeholder="tahun terbit " required>

                                <button  style="text-decoration: none; width: 20%; background-color: #ff5722;"  type="submit"> input</button>
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
