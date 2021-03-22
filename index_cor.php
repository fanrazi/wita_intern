<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/cor/sidebar_cor.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="cor")
            {
                include './user/cor/corporate.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include './user/cor/news.php';
            }
            elseif ($_GET['halaman']=="cor_add")
            {
              include './user/cor/cor_add.php';
            }
            elseif ($_GET['halaman']=="cor_edit")
            {
                include './user/cor/cor_edit.php';
            }
            elseif ($_GET['halaman']=="cor_del")
            {
                include './user/cor/cor_del.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/cor/dashboard_cor.php';;
        }
        ?>
    </div>
  </div>