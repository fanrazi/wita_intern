<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/mar/sidebar_mar.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="mar")
            {
                include './user/mar/marketing.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include './user/mar/news.php';
            }
            elseif ($_GET['halaman']=="mar_add")
            {
              include './user/mar/mar_add.php';
            }
            elseif ($_GET['halaman']=="mar_edit")
            {
                include './user/mar/mar_edit.php';
            }
            elseif ($_GET['halaman']=="mar_del")
            {
                include './user/mar/mar_del.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/mar/dashboard_mar.php';;
        }
        ?>
    </div>
  </div>