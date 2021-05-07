
<body class="hold-transition sidebar-mini layout-fixed">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Hello, <?= $_SESSION['username'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?halaman=user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
                <p>Category<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=dom" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domestic</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=int" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>International</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?halaman=cor" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Corporate</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?halaman=cru" class="nav-link">
              <i class="nav-icon fas fa-ship"></i>
              <p>Cruise</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="index.php?halaman=doc" class="nav-link">
              <i class="nav-icon fas fa-passport"></i>
              <p>Document<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=visa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=pass" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Passport</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?halaman=eco" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>E-Commerce</p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-hotel"></i>
              <p>Hotel<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=h_dom" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domestic</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=h_int" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>International</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=h_p" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Promo</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?halaman=mar" class="nav-link">
              <i class="nav-icon fas fa-comments-dollar"></i>
              <p>Marketing</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>Package<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=p_dom" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domestic</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=p_int" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>International</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="index.php?halaman=tic" class="nav-link">
              <i class="nav-icon fas fa-ticket-alt"></i>
              <p>Ticket<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=t_dom" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Domestic</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=t_int" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>International</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=t_p" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Promo</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="index.php?halaman=tou" class="nav-link">
              <i class="nav-icon fas fa-plane-departure"></i>
              <p>Outbound Tour<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=tou_er" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Europe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_me" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Middle East</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_us" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>USA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_sa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>South Africa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_an" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Australia & New Zealand</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_jap" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Japan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_kor" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Korea</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_tai" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Taiwan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_chi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>China</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=tou_oa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Other Asia</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="index.php?halaman=tf" class="nav-link">
              <i class="nav-icon fab fa-avianex"></i>
              <p>Travel Fair</p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="index.php?halaman=oth" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>Others<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?halaman=oth_wi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Wifi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=oth_tp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Theme Park</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=oth_t" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transport</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?halaman=oth_hi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Health & Insurance</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="index.php?halaman=pop" class="nav-link">
              <i class="nav-icon far fa-newspaper"></i>
              <p>News</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?halaman=logout" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>