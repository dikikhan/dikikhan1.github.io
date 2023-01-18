<?php 
$id=$_GET['apanih'];
include "koneksi.php";
mysqli_query($konek,'DELETE FROM tbl_data WHERE User="'.$id.'"');
header("location:lihat_pengguna.php");