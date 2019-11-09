<?php 

	include "../koneksi.php";
    $id_siswa=$_POST['id_siswa'];
	$nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $pilih_kelas = $_POST['pilih_kelas'];

	$query = "UPDATE data_siswa SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', alamat='$alamat', id_kelas='$pilih_kelas' WHERE id_siswa='$id_siswa'";

	$ubah = $db->prepare($query);
	$ubah->execute();

	header("location: data_siswa.php");

 ?>