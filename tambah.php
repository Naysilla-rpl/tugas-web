<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];

	$query = mysqli_query($koneksi, "INSERT INTO siswa VALUES('','$nis','$nama','$jurusan','$alamat')");
	if ($query) header("location:index.php");
}
?>

<form method="POST">
	<input type="text" name="nis" placeholder="NIS" required><br>
	<input type="text" name="nama" placeholder="Nama Lengkap" required><br>
	<input type="text" name="jurusan" placeholder="Jurusan" required><br>
	<input type="text" name="alamat" placeholder="Alamat" required><br>
	<button type="submit" name="submit">Simpan</button>
</form>