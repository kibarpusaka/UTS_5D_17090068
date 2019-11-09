<?php  
  
  include "../koneksi.php";

  $pilih_kelas = $_POST['pilih_kelas'];

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

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
              <a class="nav-link" href="../data_nilai/data_nilai.php">Data Nilai</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="data_kelas_siswa.php">Data Kelas Siswa</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand" href="#">Profil</a>
    </nav>
    <h2 class="text-center mt-5">DATA KELAS SISWA</h2>
    <div class="col-lg-10 ml-5">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary ml-2" data-toggle="modal" data-target="#pilih_siswa">
      Tambah Data
    </button>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-11 mb-5 mt-3">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Siswa</th>
              <th scope="col">Nama Kelas</th>
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          
          <?php 

            $query = "SELECT data_kelas_siswa.id_kelas_siswa, data_siswa.nama_siswa, data_kelas.nama_kelas FROM data_kelas_siswa INNER JOIN data_siswa ON data_kelas_siswa.id_siswa=data_siswa.id_siswa INNER JOIN data_kelas ON data_kelas_siswa.id_kelas=data_kelas.id_kelas WHERE id_kelas= '$pilih_kelas'";
            $data = $db->prepare($query);
            $data->execute();

            $no = 1;
            while($tampil = $data->fetch(PDO::FETCH_LAZY)){

           ?>

          <tbody>
            <tr>
              <th scope="row"><?php echo $no++; ?></th>
              <td><?php echo $tampil->nama_siswa; ?></td>
              <td><?php echo $tampil->nama_kelas; ?></td>
              <td>
                <a href="form_ubah.php?id_kelas_siswa=<?php echo $tampil->id_kelas_siswa ?>" class="btn btn-success mr-2">Ubah</a>
                <a onclick="return confirm('HAPUS DATA INI !?')" href="hapus.php?id_kelas_siswa=<?php echo $tampil->id_kelas_siswa ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          </tbody>
        <?php } ?>
        </table>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="pilih_siswa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row justify-content-center">
              <div class="col-lg-11 mb-5 mt-3">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">NIS</th>
                      <th scope="col">Nama Siswa</th>
                      <th scope="col">Opsi</th>
                    </tr>
                  </thead>
                  
                  <?php 

                    $query = "SELECT * FROM data_siswa";
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
                      <td>
                        <a href="tambah.php" class="pilih btn btn-primary"><i class="fa fa-plus"></i></a>
                      </td>
                    </tr>
                  </tbody>
                <?php } ?>
                </table>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>