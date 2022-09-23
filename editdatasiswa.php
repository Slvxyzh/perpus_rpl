<?php
include 'koneksi.php';

    $id_siswa
         = $_GET['id_siswa'];
    $sql = "SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'";
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
    <form action="editsiswa.php" method="post">
        <table class ="Word">
            <tr>
                <td><h3>Edit Data Siswa</h3></td>
                <td></td>
            </tr>
            <tr>
                <td><p><label>Id_siswa  </p></td>
                <td><input type="text" name="id_siswa" value="<?php echo $data['id_siswa'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><p><label>Nama Siswa  </p></td>
                <td><input type="text" name="nama_siswa" value="<?php echo $data['nama_siswa'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><p><label>Kelas : </p></td>
                <td><input name="kelas" value="<?php echo $data['kelas'] ?>" ></input></label></td>
            </tr>
            <tr>
                <td><p><label>Jenis_kelamin  </p></td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><p><label>Tanggal_lahir  </label></p></td>
                <td><input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>" required="required"></td>
            </tr>
            <tr>
                <td><p><label>Alamat  </p></td>
                <td><input type="text" cols="30" name="alamat" rows="5" value="<?php echo $data['alamat'] ?>" required="required"></label></td>
            </tr>
            <tr>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>