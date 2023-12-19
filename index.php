<?php 
include "db.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Bayu Saputra - Pijarcamp</title>
</head>
<body>
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content">
				<div class="col-md-6 mt-5 mb-5">
					<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah Produk</button>
                    <!-- <button id="test">test</button> -->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th>No</th>
						      <th>Nama Produk</th>
						      <th>Keterangan</th>
						      <th>Harga</th>
						      <th>Jumlah</th>
                              <th>Aksi</th>
						    </tr>
						  </thead>
						  <tbody>
                            <?php
                                $karyawan = mysqli_query($koneksi,"SELECT * FROM produk");
                                $no = 1;
                                while($row = mysqli_fetch_assoc($karyawan)) {
                            ?>
                          <tr>
                            <th scope="row"><?= $no++?></th>
                            <td><?= $row['nama_produk']?></td>
                            <td><?= $row['keterangan']?></td>
                            <td><?= $row['harga']?></td>
                            <td><?= $row['jumlah']?></td>
                            <td>
                            <button id="myModal" class="btn btn-warning" data-edit-id="<?php echo $row['id_produk']; ?>" data-bs-toggle="modal" data-bs-target="#editData_<?php echo $row['id_produk']; ?>"> Edit</button>
                                <!-- <button type="button" data-bs-target="#editData" data-bs-toggle="modal" data-edit-id="<?php echo $row['id']; ?>" onclick="prepareEditModal(<?php echo $row['id']; ?>)" class="btn btn-warning">Edit</button> -->
                                <a href="index.php?id_produk=<?php echo $row['id_produk'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                            </td>
						              </tr>
						  </tbody>
                            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="post">
                                    <div class="mb-3">
                                        <label for="nama_produk" class="col-form-label">Nama Produk</label>
                                        <input type="text" name="nama_produk" class="form-control" id="nama_produk" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan" class="col-form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="col-form-label">Harga</label>
                                        <input type="number" name="harga" class="form-control" id="harga" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah" class="col-form-label">Jumlah</label>
                                        <input type="number" name="jumlah" class="form-control" id="jumlah" required>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                                </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="modal fade" id="editData_<?php echo $row['id_produk']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Produk</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm" method="post">
                                    <input style="display: none;" type="text" name="id_produk" value="<?php echo $row['id_produk']?>">
                                    <div class="mb-3">
                                        <label for="nama_produk" class="col-form-label">Nama Produk</label>
                                        <input type="text" name="nama_produk" class="form-control" id="nama_produk" value="<?php echo $row['nama_produk']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan" class="col-form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan" value="<?php echo $row['keterangan']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga" class="col-form-label">Harga</label>
                                        <input type="number" name="harga" class="form-control" id="harga" value="<?php echo $row['harga']?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="jumlah" class="col-form-label">Jumlah</label>
                                        <input type="number" name="jumlah" class="form-control" id="jumlah" value="<?php echo $row['jumlah']?>" required>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                                </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                            </div>
                        <?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
    <script src="..assets/jquery.min.js"></script>
  <script src="..assets/popper.js"></script>
  <script src="..assets/bootstrap.min.js"></script>
  <script src="..assets/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
     document.getElementById('test').addEventListener('click', function() {
                toastr.success('Ini adalah notifikasi dari tombol Test.');
            });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var myModal = new bootstrap.Modal(document.getElementById('editData'));
    document.body.addEventListener('click', function (event) {
        if (event.target.getAttribute('data-edit-id')) {
            var editForm = document.getElementById("editForm");
            var editId = event.target.getAttribute("data-edit-id");
            var modalId = "#editData_" + editId;
            myModal = new bootstrap.Modal(document.getElementById(modalId));
            var editFormAction = "../pages?id=" + editId;
            editForm.action = editFormAction;
            myModal.show();
        }
    });
});
</script>
</body>
</html>