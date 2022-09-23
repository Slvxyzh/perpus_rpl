<?php
   include 'koneksi.php';

   if(isset($_POST['simpan'])) {
       header('Location: databuku.php');
   }
 
    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $kelas = $_POST['kelas'];
    $jenis_buku = $_POST['jenis_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $atribut = $_POST['atribut'];
    $sql = "UPDATE data_buku SET nama_buku='$nama_buku',kelas='$kelas',jenis_buku='$jenis_buku',tahun_terbit='$tahun_terbit',atribut='$atribut' WHERE id_buku='$id_buku'";
    $query = mysqli_query($connect, $sql);

      if($query) {
        header('Location: databuku.php');
      }else{
        header('Location: editbuku.php?status=gagal');
      }
?>