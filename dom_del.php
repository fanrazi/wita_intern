<?php 
  $ambil = $koneksi->query("SELECT * FROM domestik WHERE id='$_GET[id]'");
  $pecah = $ambil-> fetch_assoc();

  $koneksi->query("DELETE FROM domestik WHERE id='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='index.php?halaman=dom';</script>";
    
?>