<?php
include 'koneksi.php';

    $id_buku = $_GET['id_buku'];
    $sql = "SELECT * FROM `data_buku` WHERE id_buku='$id_buku'";
    $query = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("Data Tidak Ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <header>The Library</header>
        <ul>
            <li><a href="#"><i class=""></i>Data Siswa</a></li>
            <li><a href="#"><i class=""></i>Data Buku</a></li>
        </ul>
    </div>
    <form action="editbuku.php" method="post">
        <table class ="Word">
            <tr>
                <td><h3>Edit Data Buku</h3></td>
                <td></td>
            </tr>
            <tr>
                <td><p><label>Id_buku  </p></td>
                <td><input type="text" name="id_buku" value="<?php echo $data['id_buku'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><p><label>Nama buku  </p></td>
                <td><input type="text" name="nama_buku" value="<?php echo $data['nama_buku'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><p><label>Kelas : </p></td>
                <td><input name="kelas" value="<?php echo $data['kelas'] ?>" ></input></label></td>
            </tr>
            <tr>
                <td><p><label>Jenis_buku  </p></td>
                <td><input type="text" name="jenis_buku" value="<?php echo $data['jenis_buku'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><p><label>Tahun_terbit </label></p></td>
                <td><input type="date" name="tahun_terbit" value="<?php echo $data['tahun_terbit'] ?>" required="required"></td>
            </tr>
            <tr>
                <td><p><label>Atribut  </p></td>
                <td><input type="text" cols="30" name="atribut" rows="5" value="<?php echo $data['atribut'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>