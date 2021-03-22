  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Hotel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index.php?halaman=hotel">Hotel</a></li>
              <li class="breadcrumb-item active"><a href="index.php?halaman=h_int">International</a></li>
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
						<label>City :</label>
						<select name="city" class="form-control" required="true">
							<option>Select City </option>
							<?php
              $ambil = $koneksi->query("SELECT * FROM internasional ORDER BY nama_int ASC");
              while($city = $ambil->fetch_assoc()){
                ?>
                <Option value="<?php echo $city['id'];?>">
                  <?php echo $city['nama_int'];?>
                </Option>
              <?php }?>
						</select>
					</div>
					<div class="form-group">
						<label>Hotel Name :</label>
						<input type="text" name="h_nama" class="form-control" required="true">
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
      $nama = $_FILES['pdf']['name'];
      $lokasi = $_FILES['pdf']['tmp_name'];
      $nama = explode('.', $nama_file);
      $path = "file internsional/hotel/".$nama_file;
      
      $koneksi->query("INSERT INTO hotel_int (id_city, nama_h, nama_file, file)
             VALUES ('$_POST[city]', '$_POST[h_nama]', '$nama[0]', '$nama')");
      
      move_uploaded_file($lokasi, $path);

      echo "<div class='alert alert-info'>Data Tersimpan</div>";
      echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=h_int'>";
    }
    
    ?>
    
    <a href="index.php?halaman=h_int">
      <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
    </a>
  </div>
</section>
