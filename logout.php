<?php
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login
echo'<script >alert("Anda Berhasil Keluar"); document.location="login.php";</script>';

?>
