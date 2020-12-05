<?php
include '../koneksi.php';
$id_buku=$_POST['id_buku'];
$nama_pinjam=$_POST['nama'];
$tanggal_pinjam=$_POST['pinjam'];
$tanggal_kembali=$_POST['kembali'];
$status_pinjam=$_POST['status'];
$query= mysqli_query($con,"INSERT INTO tabel_pinjam VALUE ('','$id_buku','$nama_pinjam','$tanggal_pinjam','$tanggal_kembali','dipinjam')");
if($query)
{
    $update = "UPDATE input_buku SET status = 'dipinjam' WHERE id_buku = '$id_buku'";
    $exe = mysqli_query($con,$update);
    if($exe)
    {
        echo'<script >alert("Berhasil pinjam Buku"); document.location="pinjam_buku.php";</script>';
    }
}
else
{
    echo'<script >alert("gagal pinjam buku"); document.location="pinjam_buku.php";</script>';
}

?>
