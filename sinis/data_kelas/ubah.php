<?php 

	include "../koneksi.php";

    $id_kelas=$_POST['id_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
    $id_guru = $_POST['id_guru'];

	$query = "UPDATE data_kelas SET nama_kelas='$nama_kelas', id_guru='$id_guru' WHERE id_kelas='$id_kelas'";

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: data_kelas.php");

 ?>