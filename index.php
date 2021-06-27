<?php 
require "init.php";

if(!isset($_SESSION['login'])){
    header('location: login.php');
}

if(isset($_POST['cari'])){
    if($_POST['keyword'] === ""){
        $data = getData()[0];
        $page = getData()[1];
        $count = getData()[2];
    }else{
        $data = cari($_POST['keyword']);
    }
}else{
    $data = getData()[0];
    $page = getData()[1];
    $count = getData()[2];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>

<h2>Data Person</h2>


<a href="tambah.php">TAMBAH</a> | | 
<a href="logout.php">KELUAR</a> | | 
<a href="profile.php">PROFILE</a>
<hr>
<form action="" method="POST">
    <input type="text" name="keyword" size="30" placeholder="cari nama" autofocus autocomplete="off">
    <button type="submit" name="cari">cari!</button>
</form>

<hr>
<?php

if(isset($page)){
    for ($i=1; $i <= $page; $i++) { 
        echo '<a href="?page='.$i.'">'.$i.'</a> | ';
    }
}
?>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>#</th>
        <th>foto</th>
        <th>nama</th>
        <th>alamat</th>
        <th>tanggal lahir</th>
        <th>aksi</th>
    </tr>
    <?php if(!isset($count)){$count=0;}?>

    <?php
    foreach ($data as $k) : ?>
    <tr>
        <td><?= ++$count; ?></td>
        <td>
            <img src="profile/<?= $k['gambar']; ?>" width="50" height="50" alt="">
        </td>
        <td><?= $k['nama']; ?></td>
        <td><?= $k['alamat']; ?></td>
        <td><?= $k['tgl_lahir']; ?></td>
        <td><a href="ubah.php?id=<?= $k['id']; ?>">ubah</a> | <a href="hapus.php?id=<?= $k['id']; ?>">hapus</a>
        </td>
        

    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>