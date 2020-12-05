
<!Doctype html>
<html>
<head>
    <link rel="stylesheet" href="aset/style.css">
</head>
<body>
<div id="login">
    <div class="kiri">
        <form action="proses/regestrasi.php" method="post">
            <h2>Regestrasi</h2>
            <table>Email</table>
            <input autocomplete="off" type="text" name="email" placeholder=" Email..">
            <table>Username</table>
            <input  autocomplete="off" type="text" name="username" placeholder=" username..">
            <label>Password</label>
            <input autocomplete="off" type="password" name="password" placeholder="password..">
            <input type="hidden" name="level" class="form_login" value="user">

            <button  name="register"  type="submit">Regestrasi</button>

        </form>
    </div>
    <div class="kanan">

    </div>
</div>
</body>
</html>
