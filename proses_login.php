<?php
$pengguna=$_POST["nama"];
$password=$_POST["sandi"];
include "koneksi.php";
$kueri=mysqli_query($konek,'SELECT * FROM tbl_data WHERE User="'.$pengguna.'" AND Password1="'.$password.'"');
if(mysqli_num_rows($kueri)>0){
	// ini nanti di redirect ke halaman utama
	header("location:beranda.html");
}else{
		// ini nanti di redirect ke halaman login
	header("location:login.html");	
}
