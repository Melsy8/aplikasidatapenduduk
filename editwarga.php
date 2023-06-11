
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Pendataan Penduduk</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
      <h1><a href="dashboard.php">Aplikasi Pendataan Penduduk</a></h1>
      <ul>
        <li><a href="admin.php">Kembali</a></li>
      </ul>
  </header>
  <!-- content -->
  <div class="section">
    <div class="container">
      <h3>Data warga</h3>
      <div class="box-form">
        <form action="proseseditwarga.php" method="POST" onSubmit="return validasi_input(this)">
        <?php 
              require "koneksi.php";
              $proses=mysqli_query($conn,"SELECT*FROM warga WHERE id_warga='$_GET[id_warga]'");
              $data=mysqli_fetch_array($proses);
              ?>
          <th>NIK</th>
          <input type="text" class="form-control" name="nik" value="<?php echo $data['nik']?>" required>
          <th>Nama Warga</th>
          <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']?>" required>
          <th>Tempat lahir</th>
          <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $data['tempat_lahir']?>" required>
          <th>Tanggal lahir</th>
          <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir']?>">
          <br><th>Jenis Kelamin</th>
          <select id="jeniskelamin" name="jeniskelamin" class="form-control" required>
            <option value="<?php echo $data['jeniskelamin']?>"><?php echo $data['jeniskelamin']?></option>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
          </select>
          <th>Alamat</th>
          <input type="text" class="form-control datepicker" name="alamat" value="<?php echo $data['alamat']?>" required >
          <th>Kelurahan / Desa</th>
          <input type="text" class="form-control datepicker" name="kelurahan" value="<?php echo $data['kelurahan']?>" required>
          <th>Agama</th>
          <input type="text" class="form-control datepicker" name="agama" value="<?php echo $data['agama']?>" required>
          <th>Status Perkawinan</th>
          <input type="text" class="form-control datepicker" name="status_perkawinan" value="<?php echo $data['status_perkawinan']?>"required>
          <button type="submit" class="btn btn-primary btn-lg">Simpan</button>
        </form>
      </div>
    </div>
  </div>
  <footer>
    <div class="container">
      <small>Copyright &copy; 2023 - AplikasiPendataanPenduduk</small>
    </div>
  </footer>
</body>

</html>