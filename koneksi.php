<?php
// namahost, Username, password dan nama database
$koneksi= mysqli_connect("localhost","root","","ptabc");
// Periksa Koneksi
if (mysqli_connect_errno()){
echo "Koneksi database gagal: " . mysqli_connect_error();
}
?>