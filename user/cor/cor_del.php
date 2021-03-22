<?php 
  $ambil = $koneksi->query("SELECT * FROM corp WHERE id='$_GET[id]'");
  $pecah = $ambil-> fetch_assoc();
  $filedoc = $pecah['file'];
  if (file_exists("$filedoc"))
  {
    unlink ("$filedoc");
  }

  $koneksi->query("DELETE FROM corp WHERE id='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='index_cor.php?halaman=cor';</script>";
    
?>