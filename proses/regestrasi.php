<?php
include '../koneksi.php';

$email = $_POST['email'];
$username =$_POST['username'];
$password =$_POST['password'];
$level = $_POST['level'];


$query ="INSERT INTO  user(user_id,email,username,password,level) VALUES ('','$email','$username','$password','$level')";
$exe = mysqli_query($con,$query);
if($exe)
{
    echo'<script>alert("Anda Berhasil Regestrasi"); document.location="../login.php";</script>';
}else{
    echo'<script> alert("Anda Gagal Regestrasi"); document.location="../login.php";</script>';
}
?>