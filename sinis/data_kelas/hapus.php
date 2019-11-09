<?php 

	include "../koneksi.php";

    $id_kelas = $_GET['id_kelas'];

	$query = "DELETE FROM data_kelas WHERE id_kelas='$id_kelas'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: data_kelas.php");

 ?>