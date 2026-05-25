<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Input Data</title>
	<style>
		body {
			font-family: 'Segoe UI', sans-serif;
			background-color: #f4f7f6;
			display: flex;
			justify-content: center;
			padding-top: 50px;
		}

		.form-card {
			background: white;
			padding: 30px;
			border-radius: 8px;
			box-shadow: 0 4px 15px rgba(0,0,0,0.1);
			width: 350px;
		}

		h2 {
			text-align: center;
			color: #333;
			margin-bottom: 20px;
		}

		label {
			display: block;
			margin-bottom: 5px;
			color: #666;
			font-size: 14px;
		}

		input[type="text"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 20px; border: 1px solid #ddd;
			border-radius: 4px; 
			box-sizing: border-box;
		}

		button {
			width: 100%;
			padding: 10px;
			background-color: #4CAF50;
			border: none;
			color: white;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}

		button:hover {
			background-color: #45a049;
		}

		.back-link {
			display: block;
			text-align: center;
			margin-top: 15px;
			text-decoration: none;
			color: #2196F3;
			font-size: 14px;
		}
	</style>
</head>
<body>
	<div class="form-card">
		<h2>Form Siswa</h2>
		<form method="POST" action="">
			<label>Nama Lengkap</label>
			<input type="text" name="v_nama" placeholder="Masukkan nama..." required>

			<label>Nomor HP</label>
			<input type="text" name="v_no" placeholder="Masukkan nomor hp..." required>

			<label>Jurusan</label>
			<input type="text" name="v_jurusan" placeholder="Masukkan jurusan..." required>

			<button type="submit" name="b_simpan">Simpan Data</button>
			<a href="tampil.php" class="back-link">Lihat Daftar Siswa</a>
		</form>
	</div>
</body>
</html>

<?php
if (isset($_POST['b_simpan'])) {
	$nama = $_POST['v_nama'];
	$no = $_POST['v_no'];
	$jurusan = $_POST['v_jurusan'];
	$query = "INSERT INTO siswa (nama, no, jurusan) VALUES ('$nama', '$no', '$jurusan')";
	mysqli_query($koneksi, $query);
	echo "Data berhasil masuk!";
}
?>
