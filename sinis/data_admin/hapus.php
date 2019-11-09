<?php 

	include "../koneksi.php";

    $id_admin = $_GET['id_admin'];

	$query = "DELETE FROM data_admin WHERE id_admin='$id_admin'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: data_admin.php");

 ?>