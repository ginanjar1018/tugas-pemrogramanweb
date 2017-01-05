<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'flower';
$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysqli_error());
}
$nama = $_POST['name'];
$alm_pelanggan = $_POST['alamat'];
$nomor = $_POST['phone'];
$bunga = $_POST['bunga'];
$harga = $_POST['harga'];



mysqli_query($koneksi,"SELECT * FROM flower");

$kirim = mysqli_query($koneksi,"INSERT INTO pesanan (nama_palanggan,alm_pelanggan,nomor,bunga,harga) VALUES('$nama','$alm_pelanggan','$nomor','$bunga','$harga')");
if(! $kirim )
{
  die('Gagal Koneksi: ' . mysqli_error());
}
else{echo "Berhasil tambah data\n";}
mysqli_close($koneksi);
echo ""
?>