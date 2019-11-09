<?php 

	include "../koneksi.php";

    $id_mapel = $_GET['id_mapel'];

	$query = "DELETE FROM data_mapel WHERE id_mapel='$id_mapel'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: data_mapel.php");

 ?>