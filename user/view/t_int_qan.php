  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Qantas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_coun.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index_coun.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index_coun.php?halaman=tic">Ticket</a></li>
              <li class="breadcrumb-item active"><a href="index_coun.php?halaman=t_int">International Ticket</a></li>
              <li class="breadcrumb-item active">Qantas</li>
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
            <td>Ticket Name</td>
            <td>File</td>
          </tr>
        </thead>
        <tbody>
            <?php $nomor=1;?>
            <?php $ambil = $koneksi->query("SELECT * FROM airlines JOIN tiket_int
                        ON airlines.id=tiket_int.id_mas WHERE tiket_int.id_mas=4");?>
            <?php while($pecah = $ambil-> fetch_assoc()){?>
            <tr>
              <td><?php echo $nomor; ?></td>
              <td><?php echo $pecah['nama_t']; ?></td>
              <td><a href="file tiket/int/<?php echo $pecah['nama_file'];?>.pdf">
                  <button class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></button>
                  </a>
              </td>
            </tr>
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
      </table>
      <a href="index_coun.php?halaman=t_int">
        <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
      </a>
      </div>
    </section>