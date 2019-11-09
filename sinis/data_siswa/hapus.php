<?php 

	include "../koneksi.php";

    $id_siswa = $_GET['id_siswa'];

	$query = "DELETE FROM data_siswa WHERE id_siswa='$id_siswa'";

	$hapus = $db->prepare($query);
	$hapus->execute();

	header("location: data_siswa.php");

 ?>