<?php
include 'koneksi.php'; 

if(isset($_POST['simpan'])){
$id_siswa = $_POST['id_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO data_siswa(id_siswa, nama_siswa, kelas, jenis_kelamin, tanggal_lahir, alamat ) VALUES ('$id_siswa','$nama_siswa','$kelas','$jenis_kelamin','$tanggal_lahir','$alamat')"; 
$query = mysqli_query($connect, $sql);

if($query){
    header('Location: datasiswa.php');
}else{
    header('Location: simpan.php?status=gagal');
}
}
?>