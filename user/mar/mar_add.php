  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Marketing</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_mar.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index_mar.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index_mar.php?halaman=mar">Marketing</a></li>
              <li class="breadcrumb-item active">Add</li>
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
			<div class="row">
				<div class="col-sm-6 offset-sm-3">
					<div class="form-group">
						<label>Marketing :</label>
						<input type="text" name="m_nama" class="form-control" required="true">
					</div>
          <div class="form-group">
						<label>File :</label>
						<input type="file" name="pdf" class="form-control" required="true">
					</div>
					<div class="form-group">
						<button type="submit" name="simpan" class="btn btn-primary">
							<i class="fa fa-save"></i>
						</button>
					</div>
				</div>
			</div>
		</form>
    <?php
    if (isset($_POST['simpan']))
    {
      $nama_file = $_FILES['pdf']['name'];
      $lokasi = $_FILES['pdf']['tmp_name'];
      $nama = explode('.', $nama_file);
      $path = "file mark/".$nama_file;

      
      $koneksi->query("INSERT INTO marketing (nama_m, nama_file, file)
             VALUES ('$_POST[m_nama]', '$nama[0]', '$path')");
      
      move_uploaded_file($lokasi, $path);

      echo "<div class='alert alert-info'>Data Tersimpan</div>";
      echo "<meta http-equiv='refresh' content='1;url=index_mar.php?halaman=mar'>";
    }
    
    ?>
    
    <a href="index_mar.php?halaman=mar">
      <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
    </a>
  </div>
</section>
