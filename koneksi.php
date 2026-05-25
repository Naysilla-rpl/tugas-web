<?php

$koneksi = mysqli_connect("localhost", "root", "", "nay");
if (!$koneksi) {
	die("Koneksi ke Gudang Data Gagal: ". mysqli_connect_error());
}
?>