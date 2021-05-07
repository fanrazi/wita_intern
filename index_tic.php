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
            elseif ($_GET['halaman']=="t_p")
            {
                include './user/tic/t_p.php';
            }
            elseif ($_GET['halaman']=="t_p_add")
            {
                include './user/tic/t_p_add.php';
            }
            elseif ($_GET['halaman']=="t_p_edit")
            {
                include './user/tic/t_p_edit.php';
            }
            elseif ($_GET['halaman']=="t_p_del")
            {
                include './user/tic/t_p_del.php';
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
            elseif ($_GET['halaman']=="t_int_af")
            {
                include './user/tic/t_int_af.php';
            }
            elseif ($_GET['halaman']=="t_int_af_edit")
            {
                include './user/tic/t_int_af_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_af_del")
            {
                include './user/tic/t_int_af_del.php';
            }
            elseif ($_GET['halaman']=="t_int_am")
            {
                include './user/tic/t_int_am.php';
            }
            elseif ($_GET['halaman']=="t_int_am_edit")
            {
                include './user/tic/t_int_am_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_am_del")
            {
                include './user/tic/t_int_am_del.php';
            }
            elseif ($_GET['halaman']=="t_int_as")
            {
                include './user/tic/t_int_as.php';
            }
            elseif ($_GET['halaman']=="t_int_as_edit")
            {
                include './user/tic/t_int_as_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_as_del")
            {
                include './user/tic/t_int_as_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ba")
            {
                include './user/tic/t_int_ba.php';
            }
            elseif ($_GET['halaman']=="t_int_ba_edit")
            {
                include './user/tic/t_int_ba_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ba_del")
            {
                include './user/tic/t_int_ba_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ca")
            {
                include './user/tic/t_int_ca.php';
            }
            elseif ($_GET['halaman']=="t_int_ca_edit")
            {
                include './user/tic/t_int_ca_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ca_del")
            {
                include './user/tic/t_int_ca_del.php';
            }
            elseif ($_GET['halaman']=="t_int_cs")
            {
                include './user/tic/t_int_cs.php';
            }
            elseif ($_GET['halaman']=="t_int_cs_edit")
            {
                include './user/tic/t_int_cs_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_cs_del")
            {
                include './user/tic/t_int_cs_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ac")
            {
                include './user/tic/t_int_ac.php';
            }
            elseif ($_GET['halaman']=="t_int_ac_edit")
            {
                include './user/tic/t_int_ac_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ac_del")
            {
                include './user/tic/t_int_ac_del.php';
            }
            elseif ($_GET['halaman']=="t_int_et")
            {
                include './user/tic/t_int_et.php';
            }
            elseif ($_GET['halaman']=="t_int_et_edit")
            {
                include './user/tic/t_int_et_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_et_del")
            {
                include './user/tic/t_int_et_del.php';
            }
            elseif ($_GET['halaman']=="t_int_eh")
            {
                include './user/tic/t_int_eh.php';
            }
            elseif ($_GET['halaman']=="t_int_eh_edit")
            {
                include './user/tic/t_int_eh_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_eh_del")
            {
                include './user/tic/t_int_eh_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ev")
            {
                include './user/tic/t_int_ev.php';
            }
            elseif ($_GET['halaman']=="t_int_ev_edit")
            {
                include './user/tic/t_int_ev_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ev_del")
            {
                include './user/tic/t_int_ev_del.php';
            }
            elseif ($_GET['halaman']=="t_int_gr")
            {
                include './user/tic/t_int_gr.php';
            }
            elseif ($_GET['halaman']=="t_int_gr_edit")
            {
                include './user/tic/t_int_gr_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_gr_del")
            {
                include './user/tic/t_int_gr_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ha")
            {
                include './user/tic/t_int_ha.php';
            }
            elseif ($_GET['halaman']=="t_int_ha_edit")
            {
                include './user/tic/t_int_ha_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ha_del")
            {
                include './user/tic/t_int_ha_del.php';
            }
            elseif ($_GET['halaman']=="t_int_hw")
            {
                include './user/tic/t_int_hw.php';
            }
            elseif ($_GET['halaman']=="t_int_hw_edit")
            {
                include './user/tic/t_int_hw_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_hw_del")
            {
                include './user/tic/t_int_hw_del.php';
            }
            elseif ($_GET['halaman']=="t_int_hk")
            {
                include './user/tic/t_int_hk.php';
            }
            elseif ($_GET['halaman']=="t_int_hk_edit")
            {
                include './user/tic/t_int_hk_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_hk_del")
            {
                include './user/tic/t_int_hk_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ic")
            {
                include './user/tic/t_int_ic.php';
            }
            elseif ($_GET['halaman']=="t_int_ic_edit")
            {
                include './user/tic/t_int_ic_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ic_del")
            {
                include './user/tic/t_int_ic_del.php';
            }
            elseif ($_GET['halaman']=="t_int_jp")
            {
                include './user/tic/t_int_jp.php';
            }
            elseif ($_GET['halaman']=="t_int_jp_edit")
            {
                include './user/tic/t_int_jp_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_jp_del")
            {
                include './user/tic/t_int_jp_del.php';
            }
            elseif ($_GET['halaman']=="t_int_jp")
            {
                include './user/tic/t_int_jp.php';
            }
            elseif ($_GET['halaman']=="t_int_jp_edit")
            {
                include './user/tic/t_int_jp_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_jp_del")
            {
                include './user/tic/t_int_jp_del.php';
            }
            elseif ($_GET['halaman']=="t_int_js")
            {
                include './user/tic/t_int_js.php';
            }
            elseif ($_GET['halaman']=="t_int_js_edit")
            {
                include './user/tic/t_int_js_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_js_del")
            {
                include './user/tic/t_int_js_del.php';
            }
            elseif ($_GET['halaman']=="t_int_kn")
            {
                include './user/tic/t_int_kn.php';
            }
            elseif ($_GET['halaman']=="t_int_kn_edit")
            {
                include './user/tic/t_int_kn_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_kn_del")
            {
                include './user/tic/t_int_kn_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ko")
            {
                include './user/tic/t_int_ko.php';
            }
            elseif ($_GET['halaman']=="t_int_ko_edit")
            {
                include './user/tic/t_int_ko_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ko_del")
            {
                include './user/tic/t_int_ko_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ma")
            {
                include './user/tic/t_int_ma.php';
            }
            elseif ($_GET['halaman']=="t_int_ma_edit")
            {
                include './user/tic/t_int_ma_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ma_del")
            {
                include './user/tic/t_int_ma_del.php';
            }
            elseif ($_GET['halaman']=="t_int_nz")
            {
                include './user/tic/t_int_nz.php';
            }
            elseif ($_GET['halaman']=="t_int_nz_edit")
            {
                include './user/tic/t_int_nz_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_nz_del")
            {
                include './user/tic/t_int_nz_del.php';
            }
            elseif ($_GET['halaman']=="t_int_om")
            {
                include './user/tic/t_int_om.php';
            }
            elseif ($_GET['halaman']=="t_int_om_edit")
            {
                include './user/tic/t_int_om_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_om_del")
            {
                include './user/tic/t_int_om_del.php';
            }
            elseif ($_GET['halaman']=="t_int_ph")
            {
                include './user/tic/t_int_ph.php';
            }
            elseif ($_GET['halaman']=="t_int_ph_edit")
            {
                include './user/tic/t_int_ph_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_ph_del")
            {
                include './user/tic/t_int_ph_del.php';
            }
            elseif ($_GET['halaman']=="t_int_qt")
            {
                include './user/tic/t_int_qt.php';
            }
            elseif ($_GET['halaman']=="t_int_qt_edit")
            {
                include './user/tic/t_int_qt_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_qt_del")
            {
                include './user/tic/t_int_qt_del.php';
            }
            elseif ($_GET['halaman']=="t_int_rb")
            {
                include './user/tic/t_int_rb.php';
            }
            elseif ($_GET['halaman']=="t_int_rb_edit")
            {
                include './user/tic/t_int_rb_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_rb_del")
            {
                include './user/tic/t_int_rb_del.php';
            }
            elseif ($_GET['halaman']=="t_int_sc")
            {
                include './user/tic/t_int_sc.php';
            }
            elseif ($_GET['halaman']=="t_int_sc_edit")
            {
                include './user/tic/t_int_sc_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_sc_del")
            {
                include './user/tic/t_int_sc_del.php';
            }
            elseif ($_GET['halaman']=="t_int_tp")
            {
                include './user/tic/t_int_tp.php';
            }
            elseif ($_GET['halaman']=="t_int_tp_edit")
            {
                include './user/tic/t_int_tp_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_tp_del")
            {
                include './user/tic/t_int_tp_del.php';
            }
            elseif ($_GET['halaman']=="t_int_tk")
            {
                include './user/tic/t_int_tk.php';
            }
            elseif ($_GET['halaman']=="t_int_tk_edit")
            {
                include './user/tic/t_int_tk_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_tk_del")
            {
                include './user/tic/t_int_tk_del.php';
            }
            elseif ($_GET['halaman']=="t_int_us")
            {
                include './user/tic/t_int_us.php';
            }
            elseif ($_GET['halaman']=="t_int_us_edit")
            {
                include './user/tic/t_int_us_edit.php';
            }
            elseif ($_GET['halaman']=="t_int_us_del")
            {
                include './user/tic/t_int_us_del.php';
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