<?php 

	include "../koneksi.php";

	$nama_kelas = $_POST['nama_kelas'];
    $id_guru = $_POST['id_guru'];
    
	$query = "INSERT INTO data_kelas VALUES ('', '$nama_kelas', '$id_guru')";

	$tambah = $db->prepare($query);
	$tambah->execute();

	header("location: data_kelas.php");

 ?>