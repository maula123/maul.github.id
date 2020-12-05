
<?php
include '../koneksi.php';
$id = $_GET['id'];
$status = "Dikembalikan";
$status2 = "belum dipinjam";
$update = mysqli_query($con,"UPDATE tabel_pinjam SET status_pinjam = '$status' WHERE  id_buku = '$id'");
if ($update)
{
    $update2 = mysqli_query($con,"UPDATE input_buku SET status = '$status2' WHERE  id_buku = '$id'");
    if ($update2)
    {
        echo'<script >alert("berhasil mengembalikan buku"); document.location="pinjam_buku.php";</script>';
    }
    else
    {
        echo'<script >alert("Gagal menegmbalikan Buku"); document.location="pinjam_buku.php";</script>';
    }





}
else
{

    echo'<script >alert("gagal pinjam Buku"); document.location="pinjam_buku.php";</script>';
}
?>

