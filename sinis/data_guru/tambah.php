<?php 

	include "../koneksi.php";

	$nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $gelar = $_POST['gelar'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

	$query = "INSERT INTO data_guru VALUES ('', '$nip', '$nama_guru', '$gelar', '$jenis_kelamin', '$alamat')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: data_guru.php");

 ?>