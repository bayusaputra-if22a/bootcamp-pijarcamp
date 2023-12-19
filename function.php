<?php 
//Tambah produk
if (isset($_POST['tambah'])) {
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $tambah = mysqli_query($koneksi, "INSERT INTO produk (nama_produk, keterangan, harga, jumlah) VALUES ('$nama_produk', '$keterangan', $harga, $jumlah)");
    echo "
    <script>
    alert ('Produk berhasil di tambahkan')
    window.location = 'index.php'
    </script>
    ";
}

if (isset($_GET['id_produk'])) {
    $id_produk = $_GET['id_produk'];
    $delete = mysqli_query($koneksi, "delete from produk where id_produk = $id_produk");
    echo "
    <script>
         alert('Data Berhasil di hapus!')
         window.location = 'index.php'
    </script>";
}

if (isset($_POST['edit'])) {
    $id_produk = $_POST['id_produk'];
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $edit = mysqli_query($koneksi, "UPDATE produk SET nama_produk = '$nama_produk', keterangan = '$keterangan', harga = $harga, jumlah = $jumlah WHERE id_produk = $id_produk");
    echo "
    <script>
    alert ('Produk berhasil di edit')
    window.location = 'index.php'
    </script>
    ";
}
?>