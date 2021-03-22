<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/pac/sidebar_pac.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="package")
            {
                include './user/pac/package.php';
            }
            elseif ($_GET['halaman']=="p_dom")
            {
                include './user/pac/p_dom.php';
            }
            elseif ($_GET['halaman']=="p_dom_detail")
            {
                include './user/pac/p_dom_detail.php';
            }
            elseif ($_GET['halaman']=="p_dom_detail_edit")
            {
                include './user/pac/p_dom_detail_edit.php';
            }
            elseif ($_GET['halaman']=="p_dom_detail_del")
            {
                include './user/pac/p_dom_detail_del.php';
            }
            elseif ($_GET['halaman']=="p_dom_add")
            {
              include './user/pac/p_dom_add.php';
            }
            elseif ($_GET['halaman']=="p_int")
            {
                include './user/pac/p_int.php';
            }
            elseif ($_GET['halaman']=="p_int_detail")
            {
                include './user/pac/p_int_detail.php';
            }
            elseif ($_GET['halaman']=="p_int_detail_edit")
            {
                include './user/pac/p_int_detail_edit.php';
            }
            elseif ($_GET['halaman']=="p_int_detail_del")
            {
                include './user/pac/p_int_detail_del.php';
            }
            elseif ($_GET['halaman']=="p_int_add")
            {
              include './user/pac/p_int_add.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/pac/dashboard_pac.php';;
        }
        ?>
    </div>
  </div>