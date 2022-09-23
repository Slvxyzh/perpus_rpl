<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="sidebar">
        <header>The Library</header>
        <ul>
            <li><a href="datasiswa.php"><i class=""></i>Data Siswa</a></li>
            <li><a href="databuku.php"><i class=""></i>Data Buku</a></li>
        </ul>
    </div>

   
    
    <div class="table" style="margin-left: 509px;">
        <h3>Data Buku</h3>
        <h4><a href="createdatabuku.html" >[+] Create</a></h4>
        <table class="blockdatabuku" border= "2" >
            <tr>
                <td>Id_buku</td>
                <td>Nama_Buku</td>
                <td>Kelas</td>
                <td>Jenis_buku</td>
                <td>Tahun_terbit</td>
                <td>atribut</td>
                <td>Action</td>
            </tr>
            <?php
    $sql = "SELECT * FROM data_buku";
    $query = mysqli_query($connect, $sql);
    while( $data = mysqli_fetch_array($query)){
        echo"
        <tr> 
        <td>$data[id_buku]</td>
        <td>$data[nama_buku]</td>
        <td>$data[kelas]</td>
        <td>$data[jenis_buku]</td>
        <td>$data[tahun_terbit]</td>
        <td>$data[atribut]</td>
        <td>
        <a href='editdatabuku.php?id_buku=".$data['id_buku']."'>Edit</a>
        <a href='hapusdatabuku.php?id_buku=".$data['id_buku']."'>Hapus</a>
        </td>
        
        </tr>";
    }
    
    ?>
    </table>
</div>
</html>


