
<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="aset/style.css">
</head>
<body>
<div id="login">
    <div class="kiri">
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
            }
        }
        ?>
        <form action="proses/cek_login.php" method="post">
            <h2>Login</h2>
            <table>Username</table>
            <input  autocomplete="off" type="text" name="username" placeholder=" username..">
            <label>Password</label>
            <input autocomplete="off" type="password" name="password" placeholder="password..">

            <button type="submit">Login</button>

            <a  href="regestrasi.php">Regestrasi</a>
        </form>
    </div>
    <div class="kanan">

    </div>
</div>
</body>
</html>
