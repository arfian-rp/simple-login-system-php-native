<?php 

require "init.php";

if(!isset($_SESSION['login'])){
    header('location: login.php');
}

if(isset($_POST['submit'])){
    if(insertData($_POST) > 0){
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
    <title>Halaman tambah</title>
</head>
<body>
    <h2>Form tambah data</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="nama" name="nama" required><br>
        <input type="text" placeholder="alamat" name="alamat" required><br>
        <label>tanggal lahir:</label><br>
        <input type="date" name="tgl_lahir" value="<?= $prs['tgl_lahir']; ?>" required><br>
        
        <label>photo profile:</label><br>
        <input type="file" name="gambar"><br>

        <button type="submit" name="submit">submit</button>
        <a href="/">kembali</a>
    </form>
</body>
</html>
