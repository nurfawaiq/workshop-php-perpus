<?php include "_header.php"; ?>

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">

			<div class="panel">
				<div class="panel-heading">

					<div class="pull-left">
						<h3 class="panel-title">Data Penerbit</h3>
					</div>
					<div class="pull-right">
						<a href="penerbit_add.php" class="btn btn-primary btn-sm">Tambah</a>
					</div>
			
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Penerbit</th>
								<th>Email</th>
								<th>Telepon</th>
								<th>Alamat</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = mysqli_query($con, "SELECT * FROM penerbit") or die (mysqli_error($con));
							$no = 1;
							if(mysqli_num_rows($sql) > 0) {
								while($data = mysqli_fetch_array($sql)) { ?>
									<tr>
										<td><?=$no++?></td>
										<td><?=$data['nama_penerbit']?></td>
										<td><?=$data['email']?></td>
										<td><?=$data['telepon']?></td>
										<td><?=$data['alamat']?></td>
										<td>
										<a href="penerbit_del.php" onclick="return confirm('Yakin menghapus data?')" class="btn btn-danger btn-sm">Hapus</a>
										</td>
									</tr>
								<?php
								}
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<?php include "_footer.php"; ?>