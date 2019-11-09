<?php 

	include "../koneksi.php";

	$username = $_POST['username'];
    $password = $_POST['password'];
    $nama_admin = $_POST['nama_admin'];

	$query = "INSERT INTO data_admin VALUES ('', '$username', '$password', '$nama_admin')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: data_admin.php");

 ?>