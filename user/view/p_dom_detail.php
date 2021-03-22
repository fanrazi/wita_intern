<?php
$ambil = 
    $koneksi->query("SELECT * FROM domestik JOIN paket_dom
        ON domestik.id=paket_dom.id_city
        WHERE domestik.id='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Package <?php echo $detail ['nama_dom'];?> Detail</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_coun.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index_coun.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index_coun.php?halaman=package">Package</a></li>
              <li class="breadcrumb-item active"><a href="index_coun.php?halaman=p_dom">Domestic</a></li>
              <li class="breadcrumb-item active">Detail</li>
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
            <td>Package</td>
            <td>File</td>
          </tr>
        </thead>
        <tbody> 
          <?php $nomor=1;?>
          <?php $ambil = $koneksi->query("SELECT * FROM domestik JOIN paket_dom
                        ON domestik.id=paket_dom.id_city WHERE domestik.id='$_GET[id]'");?>
          <?php while($pecah = $ambil-> fetch_assoc()){?>
          <tr>
              <td><?php echo $nomor; ?></td>
              <td><?php echo $pecah['nama_p']; ?></td>
              <td><a href="file domestik/package/<?php echo $pecah['nama_file'];?>.pdf">
                  <button class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i></button>
                  </a>
              </td>
            </tr>
            <?php $nomor++;?>
            <?php } ?>
        </tbody>
      </table>
      <a href="index_coun.php?halaman=p_dom">
        <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
      </a>
      </div>
    </section>