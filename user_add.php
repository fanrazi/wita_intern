  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index.php?halaman=user">Users</a></li>
              <li class="breadcrumb-item active">Add User</li>
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
						<label>Username :</label>
						<input type="text" name="username" class="form-control" required="true">
					</div>
          <div class="form-group">
						<label>Password :</label>
						<input type="password" name="password" class="form-control" required="true">
					</div>
					<div class="form-group">
						<label>Level :</label>
						<select name="level" class="form-control" required="true">
							<option value="admin">Admin</option>
							<option value="corporate">Corporate</option>
							<option value="counter">Counter</option>
							<option value="document">Document</option>
							<option value="ecomm">E-Commerce</option>
							<option value="hotel">Hotel</option>
							<option value="marketing">Marketing</option>
							<option value="tiket">Ticket</option>
							<option value="outbound">Outbound</option>
						</select>
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
      $koneksi->query("INSERT INTO user (username, password, level)
             VALUES ('$_POST[username]', '$_POST[password]', '$_POST[level]')");
      echo "<div class='alert alert-info'>Data Tersimpan</div>";
      echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=user'>";
    }
    ?>
    
    <a href="index.php?halaman=user">
      <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
    </a>
  </div>
</section>
