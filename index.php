<!DOCTYPE html>
<html>
<head>
<title>CRUD PHP dan MySQLi</title>
<link rel="stylesheet"  href="style.css" type="text/css">
</head>
<body>
<center>
<h2>C.R.U.D.E DATA KARYAWAN PT ABC</h2>
<br/>
<a href="tambah.php"><b>+ TAMBAH DATA</b></a>
<br/>

<br/>
<table border="1">
<tr>
<th>No.</th>
<th>Nama</th>
<th>Alamat</th>
<th>Pekerjaan</th>
<th>OPSI</th>
</tr>
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi,"select * from karyawan");
while($id = mysqli_fetch_array($data)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $id['nama']; ?></td>
<td><?php echo $id['alamat']; ?></td>
<td><?php echo $id['pekerjaan']; ?></td>
<td>
<a href="edit.php?id=<?php echo $id['id'];
?>">EDIT</a>
<a href="hapus.php?id=<?php echo $id['id'];
?>">HAPUS</a>
</td>
</tr>
<?php
}
?>
</table>
</body>
</html>
