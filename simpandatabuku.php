<?php
include 'koneksi.php'; 

if(isset($_POST['simpan'])){
$id_buku = $_POST['id_buku'];
$nama_buku = $_POST['nama_buku'];
$kelas = $_POST['kelas'];
$jenis_buku = $_POST['jenis_buku'];
$tahun_terbit = $_POST['tahun_terbit'];
$atribut = $_POST['atribut'];

$sql = "INSERT INTO data_buku(id_buku, nama_buku, kelas, jenis_buku, tahun_terbit, atribut ) VALUES ('$id_buku','$nama_buku','$kelas','$jenis_buku','$tahun_terbit','$atribut')"; 
$query = mysqli_query($connect, $sql);

if($query){
    header('Location: databuku.php');
}else{
    header('Location: simpan.php?status=gagal');
}
}
?>