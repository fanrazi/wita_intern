  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Package Domestic</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="index.php">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="index.php?halaman=package">Package</a></li>
              <li class="breadcrumb-item active">Domestic</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <a href="index.php?halaman=p_dom_add">
        <button style="margin-bottom: 20px;" class="btn btn-primary"> <i class="fa fa-plus"></i></button>
      </a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
	<thead>
		<tr>
			<td>No</td>
			<td>City</td>
			<td>Detail</td>
		</tr>
	</thead>
	<tbody>
      <?php $nomor=1;?>
      <?php $ambil = $koneksi->query("SELECT * FROM domestik ORDER BY nama_dom ASC");?>
      <?php while($pecah = $ambil-> fetch_assoc()){?>
			<tr>
				<td><?php echo $nomor++; ?></td>
				<td><?php echo $pecah['nama_dom']; ?></a></td>
				<td>
          <a href="index.php?halaman=p_dom_detail&id=<?php echo $pecah['id'];?>">
            <button class="btn btn-primary"> <i class="fa fa-info"></i></button>
          </a>
        </td>
				
			</tr>	    
	    <?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=package">
  <button style="margin-bottom: 20px;" class="btn btn-danger"> <i class="fa fa-undo"></i></button>
</a>
</div>
</section>
</div>