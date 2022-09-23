<?php
  include 'koneksi.php';

  if(isset($_GET['id_buku'])) {
    header('Location: databuku.php');
}

$id_buku = $_GET['id_buku'];

$sql = "DELETE FROM data_buku WHERE id_buku='$id_buku'";
$query = mysqli_query($connect, $sql);

  if($query) {
    header('Location: databuku.php');
  }else{
    header('Location: hapus.php?status=gagal');
  }
  ?>