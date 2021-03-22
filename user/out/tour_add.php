  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Outbound</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index_out.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index_out.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index_out.php?halaman=tou">Outbound Tour</a></li>
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
						<label>Tour :</label>
						<select name="tou" class="form-control" required="true">
							<option>Select Tour </option>
							<?php
              $ambil = $koneksi->query("SELECT * FROM tour ORDER BY nama_tou ASC");
              while($city = $ambil->fetch_assoc()){
                ?>
                <Option value="<?php echo $city['id'];?>">
                  <?php echo $city['nama_tou'];?>
                </Option>
              <?php }?>
						</select>
					</div>
					<div class="form-group">
						<label>Tour Name :</label>
						<input type="text" name="t_nama" class="form-control" required="true">
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
      $path = "file outbound/".$nama_file;

      
      $koneksi->query("INSERT INTO outbound (nama_t, id_tou, nama_file, file)
             VALUES ('$_POST[t_nama]', '$_POST[tou]', '$nama[0]', '$path')");
      
      move_uploaded_file($lokasi, $path);

      echo "<div class='alert alert-info'>Data Tersimpan</div>";
      echo "<meta http-equiv='refresh' content='1;url=index_out.php?halaman=tou'>";
    }
    
    ?>
    
    <a href="index_out.php?halaman=tou">
      <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
    </a>
  </div>
</section>
