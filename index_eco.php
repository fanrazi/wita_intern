<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/eco/sidebar_eco.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="eco")
            {
                include './user/eco/ecomm.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include './user/eco/news.php';
            }
            elseif ($_GET['halaman']=="ecomm_add")
            {
              include './user/eco/ecomm_add.php';
            }
            elseif ($_GET['halaman']=="ecomm_edit")
            {
                include './user/eco/ecomm_edit.php';
            }
            elseif ($_GET['halaman']=="ecomm_del")
            {
                include './user/eco/ecomm_del.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/eco/dashboard_eco.php';;
        }
        ?>
    </div>
  </div>