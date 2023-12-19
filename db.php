<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "pijarcamp";

$koneksi = mysqli_connect($host, $user, $pass, $db_name);
if (!$koneksi) {
    echo "Gagal";
} else {
    // echo "berhasil";
}
?>