<?php
   include 'koneksi.php';

   if(isset($_POST['simpan'])) {
       header('Location: datasiswa.php');
   }
 
    $id_siswa = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $sql = "UPDATE data_siswa SET nama_siswa='$nama_siswa',kelas='$kelas',tanggal_lahir='$tanggal_lahir',alamat='$alamat' WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);

      if($query) {
        header('Location: datasiswa.php');
      }else{
        header('Location: editsiswa.php?status=gagal');
      }
?>