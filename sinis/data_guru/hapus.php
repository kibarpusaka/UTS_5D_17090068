<?php 

	include "../koneksi.php";

    $id_guru = $_GET['id_guru'];

	$query = "DELETE FROM data_guru WHERE id_guru='$id_guru'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: data_guru.php");

 ?>