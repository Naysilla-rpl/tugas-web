<?php include 'koneksi.php'; ?>
<table border="1" cellpadding="10">
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Siswa</title>
	<style>
		body{
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
			background-color: #f4f7f6; margin: 40px; 
		} 

		.container { 
			background: white; 
			padding: 20px; 
			border-radius: 8px;
			box-shadow: 0 2px 10px rgba(0,0,0,0.1);
		}

		h2 {
			color: #333;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}

		th, td {
			padding: 12px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:hover {
			background-color: #f5f5f5;
		}

		tr:nth-child(even) {
			background-color: #fafafa;
		}

		.btn {
			padding: 8px 12px;
			text-decoration: none;
			border-radius: 4px;
			font-size: 14px;
			color: white;
		}

		.btn-tambah {
			background-color: #2196F3;
			margin-bottom: 20px;
			display: inline-block;
		}

		.btn-edit {
			background-color: #ff9800;
		}

		.btn-hapus {
			background-color: #f44336;
		}

		.btn:hover {
			opacity: 0.8;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Daftar Siswa RPL</h2>
		<a href="index.php" class="btn btn-tambah">+ Tambah Siswa</a>

		<table>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Nomor HP</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			</tr>

	<?php
	$data = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY id DESC");
	$no = 1;
	while ($d = mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['no']; ?></td>
			<td><?php echo $d['jurusan']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-edit">Edit</a>
				<a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-hapus" onclick = "return confirm('Yakin ingin menghapus?')">Hapus</a>
			</td>
		</tr>
		<?php
	}
	?>	
			<?php}?>
		</table>
	</div>
</body>
</html>
