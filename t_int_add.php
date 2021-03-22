  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index.php?halaman=tic">Ticket</a></li>
              <li class="breadcrumb-item active">Ticket International</li>
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
						<label>Airlines :</label>
						<select name="air" class="form-control" required="true">
							<option>Select Airlines </option>
							<?php
              $ambil = $koneksi->query("SELECT * FROM airlines ORDER BY nama_a ASC");
              while($city = $ambil->fetch_assoc()){
                ?>
                <Option value="<?php echo $city['id'];?>">
                  <?php echo $city['nama_a'];?>
                </Option>
              <?php }?>
						</select>
					</div>
					<div class="form-group">
						<label>Ticket Name :</label>
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
      $path = "file tiket/int/".$nama_file;

      
      $koneksi->query("INSERT INTO tiket_int (nama_t, id_mas, nama_file, file)
             VALUES ('$_POST[t_nama]', '$_POST[air]', '$nama[0]', '$path')");
      
      move_uploaded_file($lokasi, $path);

      echo "<div class='alert alert-info'>Data Tersimpan</div>";
      echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=t_int'>";
    }
    
    ?>
    
    <a href="index.php?halaman=t_int">
      <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
    </a>
  </div>
</section>
