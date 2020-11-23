<?php 
include 'koneksi.php';


$id_peserta = $_POST['id_peserta'];
$nama_peserta = $_POST['nama_peserta'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];


$sql = $koneksi->query("UPDATE peserta SET
 peserta.nama_peserta = '$nama_peserta',
peserta.tgl_lahir = '$tgl_lahir',
peserta.jk = '$jk',
peserta.alamat = '$alamat',
peserta.agama = '$agama'
 WHERE peserta.id_peserta = $id_peserta");
if (!$sql) {
    header('Location:edit-peserta.php');
    
} 
    header('location: peserta.php');
 ?>