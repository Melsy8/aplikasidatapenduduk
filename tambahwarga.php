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
        <form action="simpanwarga.php" method="POST"></form>
        <th>NIK</th>
        <input type="text" class="form-control" name="nik" required>
        <th>Nama Warga</th>
        <input type="text" class="form-control" name="nama" required>
        <th>Tempat lahir</th>
        <input type="text" class="form-control" name="tempat_lahir" required>
        <th>Tanggal lahir</th>
        <input type="date" class="form-control datepicker" name="tgl_lahir" required>
        <th>Jenis Kelamin</th>
        <select id="jenis kelamin" class="form-control" required>
          <option value="">Pilih Jenis Kelamin</option>
          <option value="laki-laki">Laki-laki</option>
          <option value="perempuan">Perempuan</option>
        </select>
        <th>Alamat</th>
        <input type="text" class="form-control datepicker" name="tanggal_lahir" required>
        <th>Kelurahan / Desa</th>
        <input type="text" class="form-control datepicker" name="tanggal_lahir" required>
        <th>Agama</th>
        <input type="text" class="form-control datepicker" name="tanggal_lahir" required>
        <th>Status Perkawinan</th>
        <input type="text" class="form-control datepicker" name="tanggal_lahir" required>
        <button type="submit" class="btn btn-primary btn-lg">
          <i class="save"></i> Simpan
        </button>
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