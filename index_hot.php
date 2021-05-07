<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/hotel/sidebar_hot.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="hotel")
            {
                include './user/hotel/hotel.php';
            }
            elseif ($_GET['halaman']=="h_p")
            {
                include './user/hotel/h_p.php';
            }
            elseif ($_GET['halaman']=="h_p_add")
            {
                include './user/hotel/h_p_add.php';
            }
            elseif ($_GET['halaman']=="h_p_edit")
            {
                include './user/hotel/h_p_edit.php';
            }
            elseif ($_GET['halaman']=="h_p_del")
            {
                include './user/hotel/h_p_del.php';
            }
            elseif ($_GET['halaman']=="h_dom")
            {
                include './user/hotel/h_dom.php';
            }
            elseif ($_GET['halaman']=="h_dom_add")
            {
                include './user/hotel/h_dom_add.php';
            }
            elseif ($_GET['halaman']=="h_dom_detail")
            {
                include './user/hotel/h_dom_detail.php';
            }
            elseif ($_GET['halaman']=="h_dom_detail_edit")
            {
                include './user/hotel/h_dom_detail_edit.php';
            }
            elseif ($_GET['halaman']=="h_dom_detail_del")
            {
                include './user/hotel/h_dom_detail_del.php';
            }
            elseif ($_GET['halaman']=="h_int")
            {
                include './user/hotel/h_int.php';
            }
            elseif ($_GET['halaman']=="h_int_add")
            {
                include './user/hotel/h_int_add.php';
            }
            elseif ($_GET['halaman']=="h_int_detail")
            {
                include './user/hotel/h_int_detail.php';
            }
            elseif ($_GET['halaman']=="h_int_detail_edit")
            {
                include './user/hotel/h_int_detail_edit.php';
            }
            elseif ($_GET['halaman']=="h_int_detail_del")
            {
                include './user/hotel/h_int_detail_del.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include './user/hotel/news.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/hotel/dashboard_hot.php';;
        }
        ?>
    </div>
  </div>