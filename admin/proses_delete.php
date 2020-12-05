<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($con,"DELETE FROM input_buku WHERE id_buku = '$id'");
if($query)
{
    echo'<script >alert("Berhasil Hapus  data "); document.location="tabel_buku.php";</script>';
}
else
{
    echo'<script >alert("Gagal Hapus data "); document.location="tabel_buku.php";</script>';
}
?>