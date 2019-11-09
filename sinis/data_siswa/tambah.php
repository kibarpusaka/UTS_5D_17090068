<?php 

	include "../koneksi.php";

	$nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $pilih_kelas = $_POST['pilih_kelas'];

	$query = "INSERT INTO data_siswa VALUES ('', '$nis', '$nama_siswa', '$jenis_kelamin', '$alamat', '$pilih_kelas')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: data_siswa.php");

 ?>