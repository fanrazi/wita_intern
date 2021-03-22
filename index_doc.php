<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/doc/sidebar_doc.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="doc")
            {
                include './user/doc/document.php';
            }
            elseif ($_GET['halaman']=="visa")
            {
              include './user/doc/visa.php';
            }
            elseif ($_GET['halaman']=="v_add")
            {
              include './user/doc/v_add.php';
            }
            elseif ($_GET['halaman']=="v_edit")
            {
              include './user/doc/v_edit.php';
            }
            elseif ($_GET['halaman']=="v_del")
            {
              include './user/doc/v_del.php';
            }
            elseif ($_GET['halaman']=="pass")
            {
              include './user/doc/passport.php';
            }
            elseif ($_GET['halaman']=="pass_add")
            {
              include './user/doc/pass_add.php';
            }
            elseif ($_GET['halaman']=="pass_edit")
            {
              include './user/doc/pass_edit.php';
            }
            elseif ($_GET['halaman']=="pass_del")
            {
              include './user/doc/pass_del.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include './user/doc/news.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/doc/dashboard_doc.php';;
        }
        ?>
    </div>
  </div>