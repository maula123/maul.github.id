<?php
include '../koneksi.php';

$nama_pengarang=$_POST['nama'];
$judul=$_POST['judul'];
$penerbit=$_POST['penerbit'];
$tempat_buku=$_POST['tempat'];
$status=$_POST['status'];
$tahun_terbit= $_POST['tahun'];
$query= mysqli_query($con,"INSERT INTO input_buku VALUE ('','$nama_pengarang','$judul','$penerbit','$tempat_buku','$status','$tahun_terbit')");
if($query)
{
    echo'<script >alert("Berhasil input data "); document.location="input_buku.php";</script>';
}
else
{
    echo'<script >alert("Gagal input data "); document.location="input_buku.php";</script>';
}
?>
