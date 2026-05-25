<?php include 'koneksi.php'; ?>

<h2>Daftar Siswa</h2>
<a href="tambah.php">+ Tambah Siswa</a>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Nis</th>
		<th>Nama</th>
		<th>Jurusan</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>

	<?php
	$no = 1;
	$query = mysqli_query($koneksi, "SELECT * FROM siswa");
	while ($data = mysqli_fetch_array($query)) {
	?>

	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['nis']; ?></td>
		<td><?= $data['nama']; ?></td>
		<td><?= $data['jurusan']; ?></td>
		<td><?= $data['alamat']; ?></td>

		<td>
			<a href="edit.php?id=<?= $data['id']; ?>">Edit</a>
			<a href="hapus.php?id=<?= $data['id']; ?>" onclick="return confirm('Yakin Hapus?')">Hapus</a>
		</td>
	</tr>	
	<?php } ?>
</table>