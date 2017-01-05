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

 
mysqli_select_db($koneksi, 'flower');
$ambildata = mysqli_query ($koneksi, 'SELECT nama_palanggan FROM pesanan' ); 
if(! $ambildata )
{
  die('Gagal ambil data: ' . mysqli_error($koneksi));
}
while($row = mysqli_fetch_array($ambildata))
{
    echo "ID Pelanggan :{$row['nama_palanggan']}  <br> ".
         "--------------------------------<br>";
} 
echo "Berhasil ambil data\n";
mysqli_close($koneksi);
?>