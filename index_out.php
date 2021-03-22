<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/out/sidebar_out.php';?>

<div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="tou")
            {
                include './user/out/tour.php';
            }            
            elseif ($_GET['halaman']=="tou_add")
            {
                include './user/out/tour_add.php';
            }
            elseif ($_GET['halaman']=="tou_er")
            {
                include './user/out/tour_ero.php';
            }
            elseif ($_GET['halaman']=="tou_er_edit")
            {
                include './user/out/tour_ero_edit.php';
            }
            elseif ($_GET['halaman']=="tou_er_del")
            {
                include './user/out/tour_ero_del.php';
            }
            elseif ($_GET['halaman']=="tou_me")
            {
                include './user/out/tour_me.php';
            }
            elseif ($_GET['halaman']=="tou_me_edit")
            {
                include './user/out/tour_me_edit.php';
            }
            elseif ($_GET['halaman']=="tou_me_del")
            {
                include './user/out/tour_me_del.php';
            }
            elseif ($_GET['halaman']=="tou_us")
            {
                include './user/out/tour_us.php';
            }
            elseif ($_GET['halaman']=="tou_us_edit")
            {
                include './user/out/tour_us_edit.php';
            }
            elseif ($_GET['halaman']=="tou_us_del")
            {
                include './user/out/tour_us_del.php';
            }
            elseif ($_GET['halaman']=="tou_sa")
            {
                include './user/out/tour_sa.php';
            }
            elseif ($_GET['halaman']=="tou_sa_edit")
            {
                include './user/out/tour_sa_edit.php';
            }
            elseif ($_GET['halaman']=="tou_sa_del")
            {
                include './user/out/tour_sa_del.php';
            }
            elseif ($_GET['halaman']=="tou_an")
            {
                include './user/out/tour_an.php';
            }
            elseif ($_GET['halaman']=="tou_an_edit")
            {
                include './user/out/tour_an_edit.php';
            }
            elseif ($_GET['halaman']=="tou_an_del")
            {
                include './user/out/tour_an_del.php';
            }
            elseif ($_GET['halaman']=="tou_jap")
            {
                include './user/out/tour_jap.php';
            }
            elseif ($_GET['halaman']=="tou_jap_edit")
            {
                include './user/out/tour_jap_edit.php';
            }
            elseif ($_GET['halaman']=="tou_jap_del")
            {
                include './user/out/tour_jap_del.php';
            }
            elseif ($_GET['halaman']=="tou_kor")
            {
                include './user/out/tour_kor.php';
            }
            elseif ($_GET['halaman']=="tou_kor_edit")
            {
                include './user/out/tour_kor_edit.php';
            }
            elseif ($_GET['halaman']=="tou_kor_del")
            {
                include './user/out/tour_kor_del.php';
            }
            elseif ($_GET['halaman']=="tou_tai")
            {
                include './user/out/tour_tai.php';
            }
            elseif ($_GET['halaman']=="tou_tai_edit")
            {
                include './user/out/tour_tai_edit.php';
            }
            elseif ($_GET['halaman']=="tou_tai_del")
            {
                include './user/out/tour_tai_del.php';
            }
            elseif ($_GET['halaman']=="tou_chi")
            {
                include './user/out/tour_chi.php';
            }
            elseif ($_GET['halaman']=="tou_chi_edit")
            {
                include './user/out/tour_chi_edit.php';
            }
            elseif ($_GET['halaman']=="tou_chi_del")
            {
                include './user/out/tour_chi_del.php';
            }
            elseif ($_GET['halaman']=="tou_oa")
            {
                include './user/out/tour_oa.php';
            }
            elseif ($_GET['halaman']=="tou_oa_edit")
            {
                include './user/out/tour_oa_edit.php';
            }
            elseif ($_GET['halaman']=="tou_oa_del")
            {
                include './user/out/tour_oa_del.php';
            }         
            elseif ($_GET['halaman']=="pop")
            {
                include './user/out/news.php';
            }   
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/out/dashboard_out.php';;
        }
        ?>
    </div>
</div>