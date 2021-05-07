<?php

session_start();
if (empty($_SESSION['username']) or empty($_SESSION['level'])) {
    echo "<script>document.location='login.php'</script>";
}
include './inc/koneksi.php';
?>

<?php include './inc/header.php';?>

  <?php include './inc/sidebar.php';?>

<div id="page-wraper">
    <div id="page-inner">
        <?php
        if (isset($_GET['halaman']))
        {
            if ($_GET['halaman']=="user")
            {
                include 'user.php';
            }
            elseif ($_GET['halaman']=="user_add")
            {
                include 'user_add.php';
            }
            elseif ($_GET['halaman']=="user_edit")
            {
                include 'user_edit.php';
            }
            elseif ($_GET['halaman']=="user_del")
            {
                include 'user_del.php';
            }
            elseif ($_GET['halaman']=="dom")
            {
                include 'dom.php';
            }
            elseif ($_GET['halaman']=="dom_add")
            {
                include 'dom_add.php';
            }
            elseif ($_GET['halaman']=="dom_edit")
            {
                include 'dom_edit.php';
            }
            elseif ($_GET['halaman']=="dom_del")
            {
                include 'dom_del.php';
            }
            elseif ($_GET['halaman']=="cor")
            {
                include 'corporate.php';
            }
            elseif ($_GET['halaman']=="cor_add")
            {
                include 'cor_add.php';
            }
            elseif ($_GET['halaman']=="cor_del")
            {
                include 'cor_del.php';
            }
            elseif ($_GET['halaman']=="cor_edit")
            {
                include 'cor_edit.php';
            }
            elseif ($_GET['halaman']=="eco")
            {
                include 'ecomm.php';
            }
            elseif ($_GET['halaman']=="eco_add")
            {
                include 'ecomm_add.php';
            }
            elseif ($_GET['halaman']=="eco_del")
            {
                include 'ecomm_del.php';
            }
            elseif ($_GET['halaman']=="eco_edit")
            {
                include 'ecomm_edit.php';
            }
            elseif ($_GET['halaman']=="mar")
            {
                include 'marketing.php';
            }
            elseif ($_GET['halaman']=="mar_add")
            {
                include 'mar_add.php';
            }
            elseif ($_GET['halaman']=="mar_del")
            {
                include 'mar_del.php';
            }
            elseif ($_GET['halaman']=="mar_edit")
            {
                include 'mar_edit.php';
            }
            elseif ($_GET['halaman']=="tf")
            {
                include 'tf.php';
            }
            elseif ($_GET['halaman']=="tf_add")
            {
                include 'tf_add.php';
            }
            elseif ($_GET['halaman']=="tf_del")
            {
                include 'mar_del.php';
            }
            elseif ($_GET['halaman']=="tf_edit")
            {
                include 'tf_edit.php';
            }
            elseif ($_GET['halaman']=="int")
            {
                include 'int.php';
            }
            elseif ($_GET['halaman']=="int_add")
            {
                include 'int_add.php';
            }
            elseif ($_GET['halaman']=="int_edit")
            {
                include 'int_edit.php';
            }
            elseif ($_GET['halaman']=="int_del")
            {
                include 'int_del.php';
            }
            elseif ($_GET['halaman']=="hotel")
            {
                include 'hotel.php';
            }
            elseif ($_GET['halaman']=="h_p")
            {
                include 'h_p.php';
            }
            elseif ($_GET['halaman']=="h_p_add")
            {
                include 'h_p_add.php';
            }
            elseif ($_GET['halaman']=="h_p_edit")
            {
                include 'h_p_edit.php';
            }
            elseif ($_GET['halaman']=="h_p_del")
            {
                include 'h_p_del.php';
            }
            elseif ($_GET['halaman']=="t_p")
            {
                include 't_p.php';
            }
            elseif ($_GET['halaman']=="t_p_add")
            {
                include 't_p_add.php';
            }
            elseif ($_GET['halaman']=="t_p_edit")
            {
                include 't_p_edit.php';
            }
            elseif ($_GET['halaman']=="t_p_del")
            {
                include 't_p_del.php';
            }
            elseif ($_GET['halaman']=="h_dom")
            {
                include 'h_dom.php';
            }
            elseif ($_GET['halaman']=="h_dom_add")
            {
              include 'h_dom_add.php';
            }
            elseif ($_GET['halaman']=="h_dom_detail")
            {
                include 'h_dom_detail.php';
            }
            elseif ($_GET['halaman']=="h_dom_detail_edit")
            {
                include 'h_dom_detail_edit.php';
            }
            elseif ($_GET['halaman']=="h_dom_detail_del")
            {
                include 'h_dom_detail_del.php';
            }
            elseif ($_GET['halaman']=="h_int")
            {
              include 'h_int.php';
            }
            elseif ($_GET['halaman']=="h_int_add")
            {
              include 'h_int_add.php';
            }
            elseif ($_GET['halaman']=="h_int_detail")
            {
                include 'h_int_detail.php';
            }
            elseif ($_GET['halaman']=="h_int_detail_edit")
            {
                include 'h_int_detail_edit.php';
            }
            elseif ($_GET['halaman']=="h_int_detail_del")
            {
                include 'h_int_detail_del.php';
            }
            elseif ($_GET['halaman']=="package")
            {
                include 'package.php';
            }
            elseif ($_GET['halaman']=="p_dom")
            {
                include 'p_dom.php';
            }
            elseif ($_GET['halaman']=="p_dom_detail")
            {
                include 'p_dom_detail.php';
            }
            elseif ($_GET['halaman']=="p_dom_detail_edit")
            {
                include 'p_dom_detail_edit.php';
            }
            elseif ($_GET['halaman']=="p_dom_detail_del")
            {
                include 'p_dom_detail_del.php';
            }
            elseif ($_GET['halaman']=="p_dom_add")
            {
              include 'p_dom_add.php';
            }
            elseif ($_GET['halaman']=="p_int")
            {
                include 'p_int.php';
            }
            elseif ($_GET['halaman']=="p_int_detail")
            {
                include 'p_int_detail.php';
            }
            elseif ($_GET['halaman']=="p_int_detail_edit")
            {
                include 'p_int_detail_edit.php';
            }
            elseif ($_GET['halaman']=="p_int_detail_del")
            {
                include 'p_int_detail_del.php';
            }
            elseif ($_GET['halaman']=="p_int_add")
            {
              include 'p_int_add.php';
            }
            elseif ($_GET['halaman']=="doc")
            {
                include 'document.php';
            }
            elseif ($_GET['halaman']=="visa")
            {
                include 'visa.php';
            }
            elseif ($_GET['halaman']=="v_add")
            {
                include 'v_add.php';
            }
            elseif ($_GET['halaman']=="v_edit")
            {
                include 'v_edit.php';
            }
            elseif ($_GET['halaman']=="v_del")
            {
                include 'v_del.php';
            }
            elseif ($_GET['halaman']=="pass")
            {
                include 'passport.php';
            }
            elseif ($_GET['halaman']=="pass_add")
            {
                include 'pass_add.php';
            }
            elseif ($_GET['halaman']=="pass_edit")
            {
                include 'pass_edit.php';
            }
            elseif ($_GET['halaman']=="pass_del")
            {
                include 'pass_del.php';
            }
            elseif ($_GET['halaman']=="doc_add")
            {
              include 'doc_add.php';
            }
            elseif ($_GET['halaman']=="doc_edit")
            {
              include 'doc_edit.php';
            }
            elseif ($_GET['halaman']=="doc_del")
            {
              include 'doc_del.php';
            }
            elseif ($_GET['halaman']=="tic")
            {
                include 'ticket.php';
            }
            elseif ($_GET['halaman']=="t_dom")
            {
                include 't_dom.php';
            }
            elseif ($_GET['halaman']=="t_dom_add")
            {
                include 't_dom_add.php';
            }
            elseif ($_GET['halaman']=="t_dom_gar")
            {
                include 't_dom_gar.php';
            }
            elseif ($_GET['halaman']=="t_dom_gar_edit")
            {
                include 't_dom_gar_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_gar_del")
            {
                include 't_dom_gar_del.php';
            }
            elseif ($_GET['halaman']=="t_dom_lio")
            {
                include 't_dom_lio.php';
            }
            elseif ($_GET['halaman']=="t_dom_lio_edit")
            {
                include 't_dom_lio_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_lio_del")
            {
                include 't_dom_lio_del.php';
            }
            elseif ($_GET['halaman']=="t_dom_sri")
            {
                include 't_dom_sri.php';
            }
            elseif ($_GET['halaman']=="t_dom_sri_edit")
            {
                include 't_dom_sri_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_sri_del")
            {
                include 't_dom_sri_del.php';
            }
            elseif ($_GET['halaman']=="t_dom_citi")
            {
                include 't_dom_citi.php';
            }
            elseif ($_GET['halaman']=="t_dom_citi_edit")
            {
                include 't_dom_citi_edit.php';
            }
            elseif ($_GET['halaman']=="t_dom_citi_del")
            {
                include 't_dom_citi_del.php';
            }            
            elseif ($_GET['halaman']=="t_int")
            {
                include 't_int.php';
            }
            elseif ($_GET['halaman']=="t_int_cx")
            {
                include 't_int_cx.php';
            }
            elseif ($_GET['halaman']=="t_int_cx_edit")
            {
                include 't_int_cx_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_cx_del")
            {
                include 't_int_cx_del.php';
            }
            elseif ($_GET['halaman']=="t_int_emi")
            {
                include 't_int_emi.php';
            }
            elseif ($_GET['halaman']=="t_int_emi_edit")
            {
                include 't_int_emi_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_emi_del")
            {
                include 't_int_emi_del.php';
            }
            elseif ($_GET['halaman']=="t_int_sq")
            {
                include 't_int_sq.php';
            }
            elseif ($_GET['halaman']=="t_int_sq_edit")
            {
                include 't_int_sq_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_sq_del")
            {
                include 't_int_sq_del.php';
            }
            elseif ($_GET['halaman']=="t_int_qan")
            {
                include 't_int_qan.php';
            }
            elseif ($_GET['halaman']=="t_int_qan_edit")
            {
                include 't_int_qan_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_qan_del")
            {
                include 't_int_qan_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ana")
            {
                include 't_int_ana.php';
            }
            elseif ($_GET['halaman']=="t_int_ana_edit")
            {
                include 't_int_ana_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ana_del")
            {
                include 't_int_ana_del.php';
            }
            elseif ($_GET['halaman']=="t_int_tha")
            {
                include 't_int_tha.php';
            }
            elseif ($_GET['halaman']=="t_int_tha_edit")
            {
                include 't_int_tha_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_tha_del")
            {
                include 't_int_tha_del.php';
            }
            elseif ($_GET['halaman']=="t_int_add")
            {
              include 't_int_add.php';
            }
            elseif ($_GET['halaman']=="tou")
            {
                include 'tour.php';
            }
            elseif ($_GET['halaman']=="tou_add")
            {
                include 'tour_add.php';
            }
            elseif ($_GET['halaman']=="tou_er")
            {
                include 'tour_ero.php';
            }
            elseif ($_GET['halaman']=="tou_er_edit")
            {
                include 'tour_ero_edit.php';
            }
            elseif ($_GET['halaman']=="tou_er_del")
            {
                include 'tour_ero_del.php';
            }
            elseif ($_GET['halaman']=="tou_me")
            {
                include 'tour_me.php';
            }
            elseif ($_GET['halaman']=="tou_me_edit")
            {
                include 'tour_me_edit.php';
            }
            elseif ($_GET['halaman']=="tou_me_del")
            {
                include 'tour_me_del.php';
            }
            elseif ($_GET['halaman']=="tou_us")
            {
                include 'tour_us.php';
            }
            elseif ($_GET['halaman']=="tou_us_edit")
            {
                include 'tour_us_edit.php';
            }
            elseif ($_GET['halaman']=="tou_us_del")
            {
                include 'tour_us_del.php';
            }
            elseif ($_GET['halaman']=="tou_sa")
            {
                include 'tour_sa.php';
            }
            elseif ($_GET['halaman']=="tou_sa_edit")
            {
                include 'tour_sa_edit.php';
            }
            elseif ($_GET['halaman']=="tou_sa_del")
            {
                include 'tour_sa_del.php';
            }
            elseif ($_GET['halaman']=="tou_an")
            {
                include 'tour_an.php';
            }
            elseif ($_GET['halaman']=="tou_an_edit")
            {
                include 'tour_an_edit.php';
            }
            elseif ($_GET['halaman']=="tou_an_del")
            {
                include 'tour_an_del.php';
            }
            elseif ($_GET['halaman']=="tou_jap")
            {
                include 'tour_jap.php';
            }
            elseif ($_GET['halaman']=="tou_jap_edit")
            {
                include 'tour_jap_edit.php';
            }
            elseif ($_GET['halaman']=="tou_jap_del")
            {
                include 'tour_jap_del.php';
            }
            elseif ($_GET['halaman']=="tou_kor")
            {
                include 'tour_kor.php';
            }
            elseif ($_GET['halaman']=="tou_kor_edit")
            {
                include 'tour_kor_edit.php';
            }
            elseif ($_GET['halaman']=="tou_kor_del")
            {
                include 'tour_kor_del.php';
            }
            elseif ($_GET['halaman']=="tou_tai")
            {
                include 'tour_tai.php';
            }
            elseif ($_GET['halaman']=="tou_tai_edit")
            {
                include 'tour_tai_edit.php';
            }
            elseif ($_GET['halaman']=="tou_tai_del")
            {
                include 'tour_tai_del.php';
            }
            elseif ($_GET['halaman']=="tou_chi")
            {
                include 'tour_chi.php';
            }
            elseif ($_GET['halaman']=="tou_chi_edit")
            {
                include 'tour_chi_edit.php';
            }
            elseif ($_GET['halaman']=="tou_chi_del")
            {
                include 'tour_chi_del.php';
            }
            elseif ($_GET['halaman']=="tou_oa")
            {
                include 'tour_oa.php';
            }
            elseif ($_GET['halaman']=="tou_oa_edit")
            {
                include 'tour_oa_edit.php';
            }
            elseif ($_GET['halaman']=="tou_oa_del")
            {
                include 'tour_oa_del.php';
            }
            elseif ($_GET['halaman']=="cru")
            {
                include 'cruise.php';
            }
            elseif ($_GET['halaman']=="c_add")
            {
                include 'c_add.php';
            }
            elseif ($_GET['halaman']=="c_edit")
            {
                include 'c_edit.php';
            }
            elseif ($_GET['halaman']=="c_del")
            {
                include 'c_del.php';
            }
            elseif ($_GET['halaman']=="oth")
            {
                include 'others.php';
            }
            elseif ($_GET['halaman']=="oth_wi")
            {
                include 'oth_wi.php';
            }
            elseif ($_GET['halaman']=="oth_wi_add")
            {
                include 'oth_wi_add.php';
            }
            elseif ($_GET['halaman']=="oth_wi_edit")
            {
                include 'oth_wi_edit.php';
            }
            elseif ($_GET['halaman']=="oth_wi_del")
            {
                include 'oth_wi_del.php';
            }
            elseif ($_GET['halaman']=="oth_tp")
            {
                include 'oth_tp.php';
            }
            elseif ($_GET['halaman']=="oth_tp_edit")
            {
                include 'oth_tp_edit.php';
            }
            elseif ($_GET['halaman']=="oth_tp_del")
            {
                include 'oth_tp_del.php';
            }
            elseif ($_GET['halaman']=="oth_t")
            {
                include 'oth_t.php';
            }
            elseif ($_GET['halaman']=="oth_t_edit")
            {
                include 'oth_t_edit.php';
            }
            elseif ($_GET['halaman']=="oth_t_del")
            {
                include 'oth_t_del.php';
            }
            elseif ($_GET['halaman']=="oth_hi")
            {
                include 'oth_hi.php';
            }
            elseif ($_GET['halaman']=="oth_hi_add")
            {
                include 'oth_hi_add.php';
            }
            elseif ($_GET['halaman']=="oth_hi_edit")
            {
                include 'oth_hi_edit.php';
            }
            elseif ($_GET['halaman']=="oth_hi_del")
            {
                include 'oth_hi_del.php';
            }
            elseif ($_GET['halaman']=="pop")
            {
                include 'news.php';
            }
            elseif ($_GET['halaman']=="n_add")
            {
                include 'n_add.php';
            }
            elseif ($_GET['halaman']=="n_edit")
            {
                include 'n_edit.php';
            }
            elseif ($_GET['halaman']=="n_del")
            {
                include 'n_del.php';
            }
            elseif ($_GET['halaman']=="t_int_af")
            {
                include 't_int_af.php';
            }
            elseif ($_GET['halaman']=="t_int_af_edit")
            {
                include 't_int_af_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_af_del")
            {
                include 't_int_af_del.php';
            }
            elseif ($_GET['halaman']=="t_int_am")
            {
                include 't_int_am.php';
            }
            elseif ($_GET['halaman']=="t_int_am_edit")
            {
                include 't_int_am_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_am_del")
            {
                include 't_int_am_del.php';
            }
            elseif ($_GET['halaman']=="logout") {
                session_destroy();
                echo "<script>location='';</script>";
            }
        }
        else
        {
          include 'dashboard.php';;
        }
        ?>
    </div>
</div>