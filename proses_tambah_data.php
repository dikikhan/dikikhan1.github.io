<?php
$pengguna=$_POST["nama"];
$password=$_POST["boleeeh"];
include "koneksi.php";
$kueri=mysqli_query($konek,"INSERT INTO tbl_data (User,password1) VALUE ('$pengguna','$password')");
if($kueri){
	// ini nanti di redirect ke halaman utama
	header("location:lihat_pengguna.php");
}else{
		// ini nanti di redirect ke halaman login
	header("location:tambah_pengguna.php");	
}