<?php
include("koneksi.php");
if(isset($_POST['kirim'])){
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$tarif = $_POST['tarif'];

$_sql = "INSERT INTO tb_parkir (jenis_kendaraan, tarif) VALUES ('$jenis_kendaraan','$tarif')";
$query = mysqli_query($koneksi,$sql);
}
?>