<?php
require "init.php";
if(isset($_POST['submit'])){
    if(registrasi($_POST) > 0){
        header('location: /');
    } else{
        echo "<script>alert('gagal')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman registrasi</title>
</head>
<body>
    <h2>Halaman registrasi</h2>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="email" autofocus required><br>
        <input type="text" name="username" placeholder="username" required><br>
        <input type="password" name="password1" placeholder="password" autocomplete="off" required><br>
        <input type="password" name="password2" placeholder="password confirm" autocomplete="off" required><br>
        <button type="submit" name="submit">Buat akun</button>
        <a href="/">login</a>
    </form>
</body>
</html>