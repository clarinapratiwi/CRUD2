<?php
//periksa code captcha yang dimasukkan
session_start();
if($_POST["kode"] != $_SESSION["kode_cap"] OR $_POST["kode"] == "")
{	
//bila captcha yang dimasukkan salah
echo"Kode salah... <a href='index1.php'>Kembali</a>";
}
else{
//bila captcha yang dimasukkan benar	
//tulis script eksekusi lainnya di sini//
echo"Kode BENAR";
$nama		= $_POST['nama'] ;
$alamat		= $_POST['alamat'] ;
$email		= $_POST['email'] ;
echo"<br/>nama : $nama
     <br/>alamat: $alamat
	 <br/>email : $email";
//akhir script
}
?>