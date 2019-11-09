<?php 

	include "../koneksi.php";
    $id_guru=$_POST['id_guru'];
	$nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $gelar = $_POST['gelar'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

	$query = "UPDATE data_guru SET nip='$nip', nama_guru='$nama_guru', gelar='$gelar', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id_guru='$id_guru'";

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: data_guru.php");

 ?>