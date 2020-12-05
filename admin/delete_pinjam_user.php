<?php

include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM tabel_pinjam WHERE id_pinjam = '$id'");
if ($query) {
    echo'<script >alert("Data daftar pinjam  Berhasil di hapus"); document.location="tabel_pinjam_user.php";</script>';
} else {

    echo'<script >alert("Data daftar pinjam  Gagal  di hapus "); document.location="tabel_pinjam_user.php";</script>';
}


?>
