<?php 

	include "../koneksi.php";

	$nama_mapel = $_POST['nama_mapel'];
    $id_guru = $_POST['id_guru'];
    $id_kelas = $_POST['id_kelas'];
    
	$query = "INSERT INTO data_mapel VALUES ('', '$nama_mapel', '$id_guru', '$id_kelas')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: data_mapel.php");

 ?>