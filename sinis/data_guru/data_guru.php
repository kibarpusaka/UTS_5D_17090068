<?php 
  
  include "../koneksi.php";

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
              <a class="nav-link" href="data_guru.php">Data Guru</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_mapel/data_mapel.php">Data Mapel</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_nilai/data_nilai.php">Data Nilai</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="../data_kelas_siswa/data_kelas_siswa.php">Data Kelas Siswa</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand" href="#">Profil</a>
    </nav>
    <h2 class="text-center mt-5">DATA GURU</h2>
    <div class="col-lg-10 ml-5">
      <a href="form_tambah.php" class="btn btn-primary">Tambah</a>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-11 mb-5 mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NIP</th>
              <th scope="col">Nama Guru</th>
              <th scope="col">Gelar</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          
          <?php 

            $query = "SELECT * FROM data_guru";
            $data = $db->prepare($query);
            $data->execute();

            $no = 1;
            while($tampil = $data->fetch(PDO::FETCH_LAZY)){

           ?>

          <tbody>
            <tr>
              <th scope="row"><?php echo $no++; ?></th>
              <td><?php echo $tampil->nip; ?></td>
              <td><?php echo $tampil->nama_guru; ?></td>
              <td><?php echo $tampil->gelar; ?></td>
              <td><?php echo $tampil->jenis_kelamin; ?></td>
              <td><?php echo $tampil->alamat; ?></td>
              <td>
                <a href="form_ubah.php?id_guru=<?php echo $tampil->id_guru ?>" class="btn btn-success mr-2">Ubah</a>
                <a onclick="return confirm('HAPUS DATA INI !?')" href="hapus.php?id_guru=<?php echo $tampil->id_guru ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        <?php } ?>
        </table>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>