<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/tic/sidebar_tic.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="tic")
            {
                include './user/tic/ticket.php';
            }
            elseif ($_GET['halaman']=="t_dom")
            {
                include './user/tic/t_dom.php';
            }
            elseif ($_GET['halaman']=="t_dom_add")
            {
                include './user/tic/t_dom_add.php';
            }
            elseif ($_GET['halaman']=="t_dom_gar")
            {
                include './user/tic/t_dom_gar.php';
            }
            elseif ($_GET['halaman']=="t_dom_gar_edit")
            {
                include './user/tic/t_dom_gar_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_gar_del")
            {
                include './user/tic/t_dom_gar_del.php';
            }
            elseif ($_GET['halaman']=="t_dom_lio")
            {
                include './user/tic/t_dom_lio.php';
            }
            elseif ($_GET['halaman']=="t_dom_lio_edit")
            {
                include './user/tic/t_dom_lio_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_lio_del")
            {
                include './user/tic/t_dom_lio_del.php';
            }
            elseif ($_GET['halaman']=="t_dom_sri")
            {
                include './user/tic/t_dom_sri.php';
            }
            elseif ($_GET['halaman']=="t_dom_sri_edit")
            {
                include './user/tic/t_dom_sri_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_sri_del")
            {
                include './user/tic/t_dom_sri_del.php';
            }
            elseif ($_GET['halaman']=="t_dom_citi")
            {
                include './user/tic/t_dom_citi.php';
            }
            elseif ($_GET['halaman']=="t_dom_citi_edit")
            {
                include './user/tic/t_dom_citi_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_citi_del")
            {
                include './user/tic/t_dom_citi_del.php';
            }
            elseif ($_GET['halaman']=="t_dom_detail")
            {
                include './user/tic/t_dom_detail.php';
            }
            elseif ($_GET['halaman']=="t_int")
            {
                include './user/tic/t_int.php';
            }
            elseif ($_GET['halaman']=="t_int_cx")
            {
                include './user/tic/t_int_cx.php';
            }
            elseif ($_GET['halaman']=="t_int_cx_edit")
            {
                include './user/tic/t_int_cx_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_cx_del")
            {
                include './user/tic/t_int_cx_del.php';
            }
            elseif ($_GET['halaman']=="t_int_emi")
            {
                include './user/tic/t_int_emi.php';
            }
            elseif ($_GET['halaman']=="t_int_emi_edit")
            {
                include './user/tic/t_int_emi_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_emi_del")
            {
                include './user/tic/t_int_emi_del.php';
            }
            elseif ($_GET['halaman']=="t_int_sq")
            {
                include './user/tic/t_int_sq.php';
            }
            elseif ($_GET['halaman']=="t_int_sq_edit")
            {
                include './user/tic/t_int_sq_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_sq_del")
            {
                include './user/tic/t_int_sq_del.php';
            }
            elseif ($_GET['halaman']=="t_int_qan")
            {
                include './user/tic/t_int_qan.php';
            }
            elseif ($_GET['halaman']=="t_int_qan_edit")
            {
                include './user/tic/t_int_qan_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_qan_del")
            {
                include './user/tic/t_int_qan_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ana")
            {
                include './user/tic/t_int_ana.php';
            }
            elseif ($_GET['halaman']=="t_int_ana_edit")
            {
                include './user/tic/t_int_ana_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ana_del")
            {
                include './user/tic/t_int_ana_del.php';
            }
            elseif ($_GET['halaman']=="t_int_tha")
            {
                include './user/tic/t_int_tha.php';
            }
            elseif ($_GET['halaman']=="t_int_tha_edit")
            {
                include './user/tic/t_int_tha_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_tha_del")
            {
                include './user/tic/t_int_tha_del.php';
            }
            elseif ($_GET['halaman']=="t_int_add")
            {
              include './user/tic/t_int_add.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include './user/tic/news.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/tic/dashboard_tic.php';;
        }
        ?>
    </div>
  </div>