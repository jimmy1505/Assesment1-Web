<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <form>
            <div>
                <label>Username</label><br>
                <input name="nama" type="text" size="" maxlength="">
            </div>
            <div>
                <label>password</label><br>
                <input name="password" type="password">
            </div>
            <div>
                <label>Alamat</label><br>
                <textarea> </textarea>
            </div>
            <div>
                <input type="submit" value="Login / Masuk">
            </div>
        </form>
    </form>
</body>
</html>
<?php

if (isset($_GET['nama']) | isset($_GET['password'])) {
    header("location: transaksi.php");
}
?>