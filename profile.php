<?php 

require 'init.php';
if(!isset($_SESSION['login'])){
    header('location: login.php');
}
$data=$_SESSION['login'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My profile</title>
</head>
<body>
<h2>Halaman Profile</h2>
    <ul>
        <li>username : <?= $data['username'] ; ?></li>
        <li>email : <?= $data['email']; ?></li>
    </ul>

<a href="/">Kembali</a>
</body>
</html>