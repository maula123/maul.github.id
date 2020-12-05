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
<!--header-->
<header>
    <div class="container">
        <h2><a href="index.php">Admin Perpustakan Maula al falaqi</a></h2>
        <ul>
            <li ><a href="index.php">Home</a></li>
            <li><a href="cari_buku.php">Cari Buku</a></li>
            <li> <a href="input_buku.php">Input buku</a></li>
            <li><a href="tabel_buku.php">Tabel Buku</a></li>
            <li class="active"><a href="tabel_pinjam_user.php">Tabel pinjam</a></li>
            <li><a href="../logout.php">Logout</a></li>
        </ul>
    </div>
</header>
<!-- label-->
<section class="label">
    <div class="container">
        <p>Home/Tabel Pinjam Buku User</p>
    </div>
</section>


<!--abaout-->
<section class="about">
    <p><strong>Keterangan :Klik  action Hapus untuk menghapus data user yang meminjam Buku</strong> </p>

    <!-- desain paging-->
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
                <th>No</th>
                <th>nama buku</th>
                <th>nama pinjam</th>
                <th>tanggal pinjam</th>
                <th>tanggal kembali</th>
                <th>status </th>
                <th>Action</th>

            </tr>
        <?php
        include '../koneksi.php';
        $query = mysqli_query($con,"SELECT * FROM tabel_pinjam  limit $start_from,$num_per_page ");
        $i=0;
        while($ambil = mysqli_fetch_array($query))
        {
            $i++;
            $id = $ambil['id_buku'];
            $select = mysqli_query($con,"SELECT *FROM input_buku WHERE id_buku = '$id'");
            $single = mysqli_fetch_array($select);
            ?>
            <tr>
                <td><?=$ambil['id_pinjam']?></td>
                <td><?=$single['judul']?></td>
                <td><?=$ambil['nama_pinjam']?></td>
                <td><?=$ambil['tanggal_pinjam']?></td>
                <td><?=$ambil['tanggal_kembali']?></td>
                <td><?=$ambil['status_pinjam']?></td>
                <td>
                    <?php
                   $ambil['status_pinjam'] !== "belumdipinjam" ;

                        ?>
                    <a href="delete_pinjam_user.php?id=<?=$ambil['id_pinjam']?>" style="background-color: red;margin: 5px" class="a">hapus</a>
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
                <li><a href='tabel_pinjam_user.php?page=".$i."'>$i</a></li> 
                
                </ul>";

    }

    ?>
</div>
</section>

<!--fo0ter-->
<footer style="margin-top: 210px">
    <div class="container">
        <small>copyright &copy 2020, Maula Al Falaqi All  Rights Reseverd</small>
    </div>
</footer>


</body>
</html>
