<?php 
  $ambil = $koneksi->query("SELECT * FROM user WHERE id='$_GET[id]'");
  $pecah = $ambil-> fetch_assoc();

  $koneksi->query("DELETE FROM user WHERE id='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='index.php?halaman=user';</script>";
    
?>