<?php 
  
  include "../koneksi.php";

  $id_siswa = $_GET['id_siswa'];

  $query = "SELECT * FROM data_siswa WHERE id_siswa='$id_siswa'";

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
    <a href="data_siswa.php" class="btn btn-info mt-2 ml-2">Kembali</a>
    <h2 class="text-center mt-4">UBAH DATA SISWA</h2>
    <div class="row justify-content-center">
      <div class="col-lg-8 mt-4 mb-5">
        <form action="ubah.php" method="post">
          <input type="hidden" name="id_siswa" value="<?php echo $tampil->id_siswa ?>">
          <div class="form-group">
            <label>NIS</label>
            <input type="text" name="nis" maxlength="11" class="form-control" value="<?php echo $tampil->nis ?>"required>
          </div>
          <div class="form-group">
            <label>Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control" value="<?php echo $tampil->nama_siswa ?>"required>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="form-line">
        			<select name="jenis_kelamin" class="form-control show-tick">
                <option value="Laki-laki" <?php if ($tampil->jenis_kelamin=='Laki-laki') { echo "selected"; } ?>>Laki-laki</option>
                <option value="Perempuan" <?php if ($tampil->jenis_kelamin=='Perempuan'){ echo "selected"; } ?>>Perempuan</option>
              </select>
        	</div>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $tampil->alamat ?>"required>
          </div>
          <div class="form-group">
            <label>Pilih Kelas</label>
            <select name="pilih_kelas" class="form-control show-tick">
              <option value="">- Pilih -</option>
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