<?php 
  
  include "../koneksi.php";

  $id_mapel = $_GET['id_mapel'];

  $query = "SELECT data_mapel.id_mapel, data_mapel.nama_mapel, data_guru.nama_guru, data_kelas.nama_kelas FROM data_mapel INNER JOIN data_guru ON data_mapel.id_guru=data_guru.id_guru INNER JOIN data_kelas ON data_mapel.id_kelas=data_kelas.id_kelas WHERE id_mapel='$id_mapel'";

  $data = $db->prepare($query);
  $data->execute();

  $tampil = $data->fetch(PDO::FETCH_LAZY)

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
    <a href="data_mapel.php" class="btn btn-info mt-2 ml-2">Kembali</a>
    <h2 class="text-center mt-4">UBAH DATA KELAS</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 mt-4 mb-5">
        <form action="ubah.php" method="post">
          <input type="hidden" name="id_mapel" value="<?php echo $tampil->id_mapel ?>">
          <div class="form-group">
            <label>Nama Mapel</label>
            <input type="text" name="nama_mapel" class="form-control" value="<?php echo $tampil->nama_mapel ?>" required>
          </div>
          <div class="form-group">
            <label>Nama Guru</label>
            <select name="id_guru" class="form-control show-tick">
              <?php 

                $query = "SELECT * FROM data_guru";
                $data = $db->prepare($query);
                $data->execute();

                $no = 1;
                while($tampil = $data->fetch(PDO::FETCH_LAZY)){

               ?>
              <option value="<?php echo $tampil->id_guru; ?>"><?php echo $tampil->nama_guru; ?></option>

              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Kelas</label>
            <select name="id_kelas" class="form-control show-tick">
              <?php 

                $query = "SELECT * FROM data_kelas";
                $data = $db->prepare($query);
                $data->execute();

                $no = 1;
                while($tampil = $data->fetch(PDO::FETCH_LAZY)){

               ?>
              <option value="<?php echo $tampil->id_kelas; ?>"><?php echo $tampil->nama_kelas; ?></option>

              <?php } ?>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
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