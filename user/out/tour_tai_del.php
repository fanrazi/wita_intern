<?php 
  $ambil = $koneksi->query("SELECT * FROM outbound WHERE id='$_GET[id]'");
  $pecah = $ambil-> fetch_assoc();
  $filedoc = $pecah['file'];
  if (file_exists("$filedoc"))
  {
    unlink ("$filedoc");
  }

  $koneksi->query("DELETE FROM outbound WHERE id='$_GET[id]'");
  echo "<script>alert('Data Telah Dihapus');</script>";
  echo "<script>location='index_out.php?halaman=tou_tai';</script>";
    
?>