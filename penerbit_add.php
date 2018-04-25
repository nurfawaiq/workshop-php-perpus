<?php include "_header.php"; ?>

<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">

			<div class="panel">
				<div class="panel-heading">

					<div class="pull-left">
						<h3 class="panel-title">Tambah Penerbit</h3>
					</div>
					<div class="pull-right">
						<a href="penerbit.php" class="btn btn-default btn-sm">Kembali</a>
					</div>
			
				</div>
				<div class="panel-body">
                    
                    <form action="" method="post">
                        <label>Nama Penerbit</label>
                        <input type="text" name="nama" class="form-control" required autofocus>
                        <br>
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                        <br>
                        <label>Telepon</label>
                        <input type="number" name="telp" class="form-control" required>
                        <br>
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="4"></textarea>
                        <br>
                        <input type="submit" name="simpan" class="btn btn-success pull-right" value="Simpan">
                        <input type="reset" class="btn btn-danger" value="Reset">
                        <div class="clearfix"></div>
                        <br>
                    </form>
                    <?php
                    if(isset($_POST['simpan'])) {
                        $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
                        $email = trim(mysqli_real_escape_string($con, $_POST['email']));
                        $telp = trim(mysqli_real_escape_string($con, $_POST['telp']));
                        $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
                        $sql = "INSERT INTO penerbit (nama_penerbit, email, alamat, telepon) VALUES ('$nama', '$email', '$alamat', '$telp')";
                        mysqli_query($con, $sql) or die (mysqli_error($con));
                        echo "<script>alert('Berhasil tambah data!'); window.location='penerbit.php';</script>";
                    }
                    ?>
				</div>
			</div>
			
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->

<?php include "_footer.php"; ?>