<?php 

require "init.php";

if(!isset($_SESSION['login'])){
    header('location: login.php');
}

$id = $_GET["id"];
$prs = getData($id);

if(isset($_POST['submit'])){
    
    if(updateData($_POST,$id) > 0){
        header('location: /');
        } else{
            echo "GAGAL \n";
            echo mysqli_error($db);
        }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman ubah</title>
</head>
<body>
    <h2>Form ubah data</h2>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $prs['id']; ?>">
    <input type="text" placeholder="nama" name="nama" value="<?= $prs['nama']; ?>" required><br>
    <input type="text" placeholder="alamat" name="alamat" value="<?= $prs['alamat']; ?>" required><br>
    <label>tanggal lahir:</label><br>
    <input type="date" name="tgl_lahir" value="<?= $prs['tgl_lahir']; ?>" required><br>

    <label>photo profile:</label><br>
        <img src="profile/<?= $prs['gambar']; ?>" width="50" height="50" alt="">
    <input type="file" name="gambar"><br>
    <input type="hidden" name="gambarlama" value="<?= $prs['gambar']; ?>">
    <button type="submit" name="submit">submit</button>
    <a href="/">kembali</a>
    </form>
</body>
</html>