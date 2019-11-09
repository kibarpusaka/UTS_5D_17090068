<?php 
  
  include "../koneksi.php";

  $pilih_kelas = $_POST['pilih_kelas'];
  $pilih_mapel = $_POST['pilih_mapel'];

  

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Selamat Datang</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a class="nav-link" href="../data_admin/data_admin.php">Data Admin</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_kelas/data_kelas.php">Data Kelas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_siswa/data_siswa.php">Data Siswa</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_guru/data_guru.php">Data Guru</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_mapel/data_mapel.php">Data Mapel</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="data_nilai.php">Data Nilai</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_kelas_siswa/data_kelas_siswa.php">Data Kelas Siswa</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand" href="#">Profil</a>
    </nav>
    <h2 class="text-center mt-4">DATA NILAI SISWA</h2>
    <div class="row justify-content-center">
      <div class="col-lg-11 mt-4 mb-5">
      	<table class="mb-4">
      		<thead>
      			<tr>
      				<th><h4>Kelas</h4></th>
      				<th></th>
					<th><h4>:</h4></th>
					<th></th>
			      	<th><h4>
			      		<?php 

				            $query = "SELECT * FROM data_kelas WHERE id_kelas='$pilih_kelas'";
				            $data = $db->prepare($query);
				            $data->execute();

				            while($tampil = $data->fetch(PDO::FETCH_LAZY)){

				            	echo $tampil->nama_kelas;

					            }
				           ?>
			      	 </h4></th>
      			</tr>
      			<tr>
      				<th><h4>Mapel</h4></th>
      				<th></th>
					<th><h4>:</h4></th>
					<th></th>
			      	<th><h4>
			      		<?php 

				            $query = "SELECT * FROM data_mapel WHERE id_mapel='$pilih_mapel'";
				            $data = $db->prepare($query);
				            $data->execute();

				            while($tampil = $data->fetch(PDO::FETCH_LAZY)){

				            	echo $tampil->nama_mapel;

					            }
				           ?>
			      	 </h4></th>
      			</tr>
      		</thead>
      	</table>
      	<form action="">
	        <table class="table table-striped">
	          <thead>
	            <tr>
	              <th scope="col">No</th>
	              <th scope="col">NIS</th>
	              <th scope="col">Nama Siswa</th>
	              <th scope="col">Nilai Tugas</th>
	              <th scope="col">Nilai UTS</th>
	              <th scope="col">Nilai UAS</th>
	              <th scope="col">Nilai Akhir</th>
	            </tr>
	          </thead>
	          
	          <?php 

	            $query = "SELECT * FROM data_siswa WHERE id_kelas='$pilih_kelas'";
	            $data = $db->prepare($query);
	            $data->execute();

	            $no = 1;
	            while($tampil = $data->fetch(PDO::FETCH_LAZY)){

	           ?>

	          <tbody>
	            <tr>
	              <th scope="row"><?php echo $no++; ?></th>
	              <td><?php echo $tampil->nis; ?></td>
	              <td><?php echo $tampil->nama_siswa; ?></td>
	              <td><input type="text" name="nilai_tugas" maxlength="3" class="form-control"></td>
	              <td><input type="text" name="nilai_uts" maxlength="3" class="form-control"></td>
	              <td><input type="text" name="nilai_uas" maxlength="3" class="form-control"></td>
	              <td><input type="text" name="nilai_akhir" maxlength="3" class="form-control"></td>
	            </tr>
	          </tbody>
	        <?php } ?>
		        <thead>
		        	<th></th>
		        	<th></th>
		        	<th></th>
		        	<th></th>
		        	<th></th>
		        	<th></th>
		        	<th>
		        		<button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
		        	</th>
		        </thead>
	    	</table>
		</form>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>