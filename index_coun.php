<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './user/view/sidebar_cou.php';?>

  <div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="hotel")
            {
                include './user/view/hotel.php';
            }
            elseif ($_GET['halaman']=="h_dom")
            {
                include './user/view/h_dom.php';
            }            
            elseif ($_GET['halaman']=="h_dom_detail")
            {
                include './user/view/h_dom_detail.php';
            }            
            elseif ($_GET['halaman']=="h_int")
            {
              include './user/view/h_int.php';
            }
            elseif ($_GET['halaman']=="h_int_detail")
            {
                include './user/view/h_int_detail.php';
            }
            elseif ($_GET['halaman']=="package")
            {
                include './user/view/package.php';
            }
            elseif ($_GET['halaman']=="p_dom")
            {
                include './user/view/p_dom.php';
            }
            elseif ($_GET['halaman']=="p_dom_detail")
            {
                include './user/view/p_dom_detail.php';
            }                    
            elseif ($_GET['halaman']=="p_int")
            {
                include './user/view/p_int.php';
            }
            elseif ($_GET['halaman']=="p_int_detail")
            {
                include './user/view/p_int_detail.php';
            }
            elseif ($_GET['halaman']=="doc")
            {
                include './user/view/document.php';
            }
            elseif ($_GET['halaman']=="visa")
            {
                include './user/view/visa.php';
            }
            elseif ($_GET['halaman']=="pass")
            {
                include './user/view/passport.php';
            }
            elseif ($_GET['halaman']=="tic")
            {
                include './user/view/ticket.php';
            }
            elseif ($_GET['halaman']=="t_dom")
            {
                include './user/view/t_dom.php';
            }
            elseif ($_GET['halaman']=="t_dom_gar")
            {
                include './user/view/t_dom_gar.php';
            }
            elseif ($_GET['halaman']=="t_dom_lio")
            {
                include './user/view/t_dom_lio.php';
            }
            elseif ($_GET['halaman']=="t_dom_sri")
            {
                include './user/view/t_dom_sri.php';
            }
            elseif ($_GET['halaman']=="t_dom_citi")
            {
                include './user/view/t_dom_citi.php';
            }
            elseif ($_GET['halaman']=="t_int")
            {
                include './user/view/t_int.php';
            }
            elseif ($_GET['halaman']=="t_int_cx")
            {
                include './user/view/t_int_cx.php';
            }
            elseif ($_GET['halaman']=="t_int_emi")
            {
                include './user/view/t_int_emi.php';
            }
            elseif ($_GET['halaman']=="t_int_sq")
            {
                include './user/view/t_int_sq.php';
            }
            elseif ($_GET['halaman']=="t_int_qan")
            {
                include './user/view/t_int_qan.php';
            }
            elseif ($_GET['halaman']=="t_int_ana")
            {
                include './user/view/t_int_ana.php';
            }
            elseif ($_GET['halaman']=="t_int_tha")
            {
                include './user/view/t_int_tha.php';
            }
            elseif ($_GET['halaman']=="tou")
            {
                include './user/view/tour.php';
            }
            elseif ($_GET['halaman']=="tou_er")
            {
                include './user/view/tour_ero.php';
            }
            elseif ($_GET['halaman']=="tou_me")
            {
                include './user/view/tour_me.php';
            }
            elseif ($_GET['halaman']=="tou_us")
            {
                include './user/view/tour_us.php';
            }
            elseif ($_GET['halaman']=="tou_sa")
            {
                include './user/view/tour_sa.php';
            }
            elseif ($_GET['halaman']=="tou_an")
            {
                include './user/view/tour_an.php';
            }
            elseif ($_GET['halaman']=="tou_jap")
            {
                include './user/view/tour_jap.php';
            }
            elseif ($_GET['halaman']=="tou_kor")
            {
                include './user/view/tour_kor.php';
            }
            elseif ($_GET['halaman']=="tou_tai")
            {
                include './user/view/tour_tai.php';
            }
            elseif ($_GET['halaman']=="tou_chi")
            {
                include './user/view/tour_chi.php';
            }            
            elseif ($_GET['halaman']=="tou_oa")
            {
                include './user/view/tour_oa.php';
            }
            elseif ($_GET['halaman']=="cru")
            {
                include './user/view/cruise.php';
            }
            elseif ($_GET['halaman']=="oth")
            {
                include './user/view/others.php';
            }
            elseif ($_GET['halaman']=="oth_wi")
            {
                include './user/view/oth_wi.php';
            }
            elseif ($_GET['halaman']=="oth_tp")
            {
                include './user/view/oth_tp.php';
            }
            elseif ($_GET['halaman']=="oth_t")
            {
                include './user/view/oth_t.php';
            }
            elseif ($_GET['halaman']=="cor")
            {
                include './user/view/corporate.php';
            }
            elseif ($_GET['halaman']=="eco")
            {
                include './user/view/ecomm.php';
            }
            elseif ($_GET['halaman']=="mar")
            {
                include './user/view/marketing.php';
            }
            elseif ($_GET['halaman']=="tf")
            {
                include './user/view/tf.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include './user/view/news.php';
            }                         
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include './user/view/dashboard_cou.php';;
        }
        ?>
    </div>
  </div>