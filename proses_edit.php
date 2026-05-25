<?php
include 'koneksi.php';

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];

	$query = "UPDATE siswa SET nama = '$nama', jurusan = '$jurusan' WHERE id = '$id'";
	$hasil = mysqli_query($koneksi, $query);

	if ($hasil) {
		header("location:tampil.php?pesan=update_berhasil");
	} else {
		echo "Gagal mengupdate data: ". mysqli_error($koneksi);
	}
}
?>