<?php 
  $ambil = $koneksi->query("SELECT * FROM visa WHERE id='$_GET[id]'");
  $pecah = $ambil-> fetch_assoc(); 
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Visa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_doc.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index_doc.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index_doc.php?halaman=doc">Document</a></li>
              <li class="breadcrumb-item active">Visa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     <form method="POST" enctype="multipart/form-data">
     <input type="hidden" name="id" >
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<label>Visa :</label>
						<input type="text" name="v_nama" class="form-control" value="<?php echo $pecah['nama_v'];?>" required="true">
					</div>
          <div class="form-group">
						<label>Change File :</label>
						<input type="file" name="pdf" class="form-control">
					</div>
					<div class="form-group">
						<button type="update" name="update" class="btn btn-primary">
							<i class="fa fa-save"></i>
						</button>
					</div>
				</div>
			</div>
		</form>
    <?php 
        if (isset($_POST['update']))
        {
          $nama_file = $_FILES['pdf']['name'];
          $lokasi = $_FILES['pdf']['tmp_name'];
          $nama = explode('.', $nama_file);
          $path = "file dokumen/visa/".$nama_file;

          if(!empty($lokasi))
          {
            $koneksi->query("UPDATE visa SET nama_v='$_POST[v_nama]',
                  nama_file='$nama[0]', file='$path' WHERE id='$_GET[id]'");

            move_uploaded_file($lokasi, $path);
          }
          else
          {
            $koneksi->query("UPDATE visa SET nama_v='$_POST[v_nama]' WHERE id='$_GET[id]'");
          }  
          echo "<div class='alert alert-info'>Data Telah Diubah</div>";
          echo "<meta http-equiv='refresh' content='1;url=index_doc.php?halaman=visa'>";
        }  
      ?>
      <a href="index_doc.php?halaman=visa">
        <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
      </a>

      </div>
    </section>
  </div>