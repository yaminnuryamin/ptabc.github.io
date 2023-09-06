<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi</title>
<link rel="stylesheet"  href="style.css" type="text/css">
</head>
<body>
<center>
<h2>CRUD DATA KARYAWAN </h2>

<br/>
<h3>EDIT DATA KARYAWAN</h3>
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from karyawan where id='$id'"); while ($id = mysqli_fetch_array ($data)){
?>
<form method="post" action="update.php">
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="id" value="<?php echo $id['id']; ?>">
<input type="text" name="nama" value="<?php echo $id['nama']; ?>">
</td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="alamat" value="<?php echo $id['alamat']; ?>"></td>
</tr>
<tr>
<td>Pekerjaan</td>
<td><input type="text" name="pekerjaan" value="<?php echo $id['pekerjaan']; ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="SIMPAN"></td>
</tr>
</table>
</form>
<?php
}
?>
<hr>
<br/>
<a href="index.php">KEMBALI</a>
<br/>
</body>
</html>