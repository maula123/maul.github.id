<?php
include '../koneksi.php';
$id = $_POST['id'];
$nama_pengarang=$_POST['nama'];
$judul=$_POST['judul'];
$penerbit=$_POST['penerbit'];
$tempat_buku=$_POST['tempat'];
$status=$_POST['status'];
$tahun_terbit= $_POST['tahun'];
$query= mysqli_query($con,"UPDATE input_buku SET nama_pengarang ='$nama_pengarang', judul='$judul',penerbit ='$penerbit', tempat_buku='$tempat_buku',  status ='$status', tahun_terbit='$tahun_terbit'  WHERE id_buku = '$id'");
if($query)
{
    echo'<script >alert("Berhasil Update input data "); document.location="tabel_buku.php";</script>';
}
else
{
    echo'<script >alert("Gagal  Update input data "); document.location="tabel_buku.php";</script>';
}
?>
