<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dariform
$id = $_POST['id'];
$nama= $_POST['nama'];
$pekerjaan= $_POST['pekerjaan'];
$alamat= $_POST['alamat'];
// update data kedatabase
mysqli_query($koneksi,"update karyawan set nama='$nama', pekerjaan='$pekerjaan',
alamat='$alamat' where id='$id'");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>