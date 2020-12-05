<?php
include '../koneksi.php';
if(isset($_GET['page'])){
    $page= $_GET['page'];
}else
{
    $page = 1;
}
$num_per_page =03;
$start_from =($page-1)*03;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../aset/style1.css">
    <title>PERPUSTAKAN Maula Al Falaqi</title>

<body>

<header>
    <div class="container">
        <h2><a href="index.php">Admin Perpustakan Maula al falaqi</a></h2>
        <ul>
            <li ><a href="index.php">Home</a></li>
            <li><a href="cari_buku.php">Cari Buku</a></li>
            <li> <a href="input_buku.php">Input buku</a></li>
            <li class="active"><a href="tabel_buku.php">Tabel Buku</a></li>
            <li><a href="tabel_pinjam_user.php">Tabel pinjam</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </div>
</header>
</section>
<!-- label-->
<section class="label">
    <div class="container">
        <p>Home/Tabel Buku</p>
    </div>
</section>


<!--abaout-->
<section class="about">
    <p><strong>Keterangan :Klik  action edit untuk mengedit  data buku</strong> </p>
    <p><strong>Keterangan :Klik  action Hapus untuk menghapus data buku</strong> </p>
    <style>
        ul.pagination {
            display: inline-block;
           margin-top: 15px;

        }
        ul.pagination li {display: inline;}
        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
        }
        ul.pagination li a.active {
            background-color: #4CAF50;
            color: white;
            border: 1px solid #4CAF50;
        }
        ul.pagination li a:hover:not(.active) {background-color: #ddd;}
        div.center {text-align: center;}
    </style>
    <div class="container">
        <table id="customers">
            <tr>
                <th>no</th>
                <th>nama pengarang</th>
                <th>judul</th>
                <th>penerbit</th>
                <th>Tempat Buku</th>
                <th>status</th>
                <th>Tahun Terbit</th>
                <th>Action</th>

            </tr>

            <?php
            include '../koneksi.php';
            $query = mysqli_query($con,"SELECT * FROM input_buku limit $start_from,$num_per_page");
            $i=0;
            while($ambil = mysqli_fetch_array($query))
            {
                $i++
                ?>
                <tr>
                    <td><?=$ambil['id_buku']?></td>
                    <td><?=$ambil['nama_pengarang']?></td>
                    <td><?=$ambil['judul']?></td>
                    <td><?=$ambil['penerbit']?></td>
                    <td><?=$ambil['tempat_buku']?></td>
                    <td><?=$ambil['status']?></td>
                    <td><?=$ambil['tahun_terbit']?></td>
                    <td>
                        <a href="update.php?id=<?=$ambil['id_buku']?>" class="a"> edit</a>
                        <a href="proses_delete.php?id=<?=$ambil['id_buku']?>" style="background-color: red;margin: 5px" class="a">hapus</a>
                    </td>
                </tr>


                <?php
            }

            ?>

        </table>
        <?php
        $pr_query = "select * from input_buku ";
        $pr_exe = mysqli_query($con,$pr_query);
        $total_record = mysqli_num_rows($pr_exe);
        $total_page = ceil($total_record/$num_per_page);

     for($i=1; $i<$total_page;$i++)
     {
         echo  "<ul class=\"pagination\"> 
                <li><a href='tabel_buku.php?page=".$i."'>$i</a></li> 
                
                </ul>";

     }

        ?>

</section>

<!--fo0ter-->
<footer style="margin-top: 210px">
    <div class="container">
        <small>copyright &copy 2020, Maula Al Falaqi All  Rights Reseverd</small>
    </div>
</footer>


</body>
</html>
