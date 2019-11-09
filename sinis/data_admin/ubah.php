<?php 

	include "../koneksi.php";
    $id_admin=$_POST['id_admin'];
	$username = $_POST['username'];
    $password = $_POST['password'];
    $nama_admin = $_POST['nama_admin'];

	$query = "UPDATE data_admin SET username='$username', password='$password', nama_admin='$nama_admin' WHERE id_admin='$id_admin'";

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: data_admin.php");

 ?>