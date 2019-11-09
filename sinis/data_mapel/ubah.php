<?php 

	include "../koneksi.php";

    $id_mapel=$_POST['id_mapel'];
	$nama_mapel = $_POST['nama_mapel'];
    $id_guru = $_POST['id_guru'];
    $id_kelas = $_POST['id_kelas'];

	$query = "UPDATE data_mapel SET nama_mapel='$nama_mapel', id_guru='$id_guru', id_kelas='$id_kelas' WHERE id_mapel='$id_mapel'";

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: data_mapel.php");

 ?>