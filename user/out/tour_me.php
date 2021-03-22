  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Middle East</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_out.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index_out.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index_out.php?halaman=tou">Outbound Tour</a></li>
              <li class="breadcrumb-item active">Middle East</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <td>No</td>
            <td>Tour Middle East</td>
            <td>File</td>
            <td>Action</td>
          </tr>
        </thead>
        <tbody>
            <?php $nomor=1;?>
            <?php $ambil = $koneksi->query("SELECT * FROM tour JOIN outbound
                        ON tour.id=outbound.id_tou WHERE outbound.id_tou=2");?>
            <?php while($pecah = $ambil-> fetch_assoc()){?>
            <tr>
              <td><?php echo $nomor; ?></td>
              <td><?php echo $pecah['nama_t']; ?></td>
              <td><a href="file outbound/<?php echo $pecah['nama_file'];?>.pdf">
                  <button class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></button>
                  </a>
              </td>
              <td>
                <a href="index_out.php?halaman=tou_me_edit&id=<?php echo $pecah['id']; ?>">
                  <button class="btn btn-success btn-sm"> <i class="fa fa-edit"></i></button>
                </a>
                <a href="index_out.php?halaman=tou_me_del&id=<?php echo $pecah['id']; ?>">
                  <button class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i></button>
                </a>
              </td>
            </tr>
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
      </table>
      <a href="index_out.php?halaman=tou">
        <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
      </a>
      </div>
    </section>