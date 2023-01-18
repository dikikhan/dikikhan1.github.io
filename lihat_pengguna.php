	<!DOCTYPE html>
	<html>
	<head>
		<title>Halaman beranda</title>
		<style type="text/css">
			ul {  
				list-style-type: none;  
			}
			a:link { 
				text-decoration: none; 
			}
			body{
				background: #a6f77b;
			}
		</style>
	</head>
	<body >
	<table  width="100%">
		<tr>
			<center>
				<h1>Selamat Datang Di Politeknik Kampar</h1>
			</center>
		</tr>

		<br>
		<br>
		<tr>
			<td width="25%">
			<ul>
				<li>
					<a href="Beranda.html">
						Beranda
					</a>
				</li>
				<li>
					<a href="lihat_pengguna.php">Lihat Pengguna</a>
				</li>
			</ul>
			</td>
			<td>
			<b>LIST PENGGUNA</b>
			<?php 
				include "koneksi.php";
				$kueri=mysqli_query($konek,'SELECT * FROM tbl_data');
				?>
				<table border="1">
					
					<tr>

						<td>
							<b>
							Nama Pengguna
						</b>
						</td>
						<td>
							<b>
							Sandi Pengguna
						</b>
						</td>
						<td>
							<b>
							Aksi
							</b>
						</td>
					</tr>

				<?php
				while($row = mysqli_fetch_array($kueri)){
					echo"<tr><td>";
					echo $row['User'];
					echo"</td><td>";
					echo $row['password1'];
					echo"</td>
					<td>";
					echo"
						<a href='hapus.php?apanih=".$row['User']."		'>hapus</a>
					";

				}
			?>
			</table>
			<br>
			<button><a  href="tambah_pengguna.php">Tambah Pengguna</a></button>
			</td>
		</tr>
	</table>
</body>
</html>