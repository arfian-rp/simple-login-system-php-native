<?php 
require 'init.php';
if(isset($_COOKIE['login'])){
    loginCookies($_COOKIE['login']);
}
if(isset($_SESSION['login'])){
    header('location: /');
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    login($username, $password);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman login</title>
</head>
<body>
    <h2>Halaman login</h2>
    <form action="" method="POST">
    <input type="text" name="username" placeholder="username" required autofocus><br>
    <input type="password" name="password" placeholder="password" required autocomplete="off"><br>
    Remember me:<input type="checkbox" name="remember"><br>
    <button type="submit" name="submit">Masuk</button>
    <a href="registrasi.php">buat akun?</a>
    </form>
</body>
</html>