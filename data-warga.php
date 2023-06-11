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

  <script>
    $(function () {
      $(".datepicker").datepicker();
    });
  </script>

</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
      <h1><a href="dashboard.php">Aplikasi Pendataan Penduduk</a></h1>
      <ul>
        <li><a href="keluar.php">Kembali</a></li>
      </ul>
  </header>
  <!-- content -->
  <div class="section">
    <div class="container">
      <h3>data warga</h3>
      <div class="box-form">
        <form action="" method="POST"></form>
        <h3>A. Data Pribadi</h3>
        <th>NIK</th>
        <input type="text" class="form-control" name="nik" required>
        <th>Nama Warga</th>
        <input type="text" class="form-control" name="nama_warga" required>
        <th>Tempat lahir</th>
        <input type="text" class="form-control" name="tempat_lahir" required>
        <th>Tanggal lahir</th>
        <input type="text" class="form-control datepicker" name="tanggal_lahir" required>
        <th>Jenis Kelamin</th>
        <select id="jenis kelamin" class="form-control" required>
          <option value="">Pilih Jenis Kelamin</option>
          <option value="L">Laki-laki</option>
          <option value="P">Perempuan</option>
        </select>
        <h3>B. Data Alamat</h3>
        <th>Alamat KTP</th>
        <input type="text" class="form-control" name="alamat_KTP" required>
        <th>Alamat</th>
        <input type="text" class="form-control" name="alamat" required>
        <th>Desa/Kelurahan</th>
        <input type="text" class="form-control" name="desa/kelurahan" required>
        <th>Kabupaten/Kota</th>
        <input type="text" class="form-control" name="kabupatern/kota" required>
        <th>Provinsi</th>
        <input type="text" class="form-control" name="Provinsi" required>
        <th>Negara</th>
        <input type="text" class="form-control" name="negara" required>
        <th>RT</th>
        <input type="text" class="form-control" name="rt" required>
        <th>RW</th>
        <input type="text" class="form-control" name="re" required>
        <h3>C. Data Lain-Lain</h3>
        <th>Jenis Kelamin</th>
        <select id="agama" class="form-control" name="agama" required>
          <option value="">Pilih Agama</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Katolik">Katolik</option>
          <option value="Hindu">Hindu</option>
          <option value="Buddha">Buddha</option>
          <option value="Konghucu">Konghucu</option>
          <option value="Lainnya">Lainnya</option>
        </select>
        <th>pendidikan Terakhir</th>
        <select id="pendidikan_terakhir" class="form-control" name="pendidikan_terakhir" required>
          <option value="">Pilih Pendidikan Terakhir</option>
          <option value="Tidak Sekolah">Tidak Sekolah</option>
          <option value="SD">SD</option>
          <option value="SMP">SMP</option>
          <option value="SMA">SMA</option>
          <option value="Diploma">Diploma</option>
          <option value="Sarjana">Sarjana</option>
          <option value="Magister">Magister</option>
          <option value="Doktor">Doktor</option>
          <option value="Lainnya">Lainnya</option>
        </select>
        <th>Pekerjaan</th>
        <input type="text" class="form-control" required>
        <th>Status Perkawinan</th>
        <select id="status_perkawinan" class="form-control" name="status_perkawinan" required>
          <option value="">Pilih Status Perkawinan</option>
          <option value="Belum Menikah">Belum Menikah</option>
          <option value="Menikah">Menikah</option>
          <option value="Cerai">Cerai</option>
        </select>
        <th>status tinggal</th>
        <select id="status_perkawinan" class="form-control" name="status_perkawinan" required>
          <option value="">Pilih Status tinggal</option>
          <option value="Tetap">Tetap</option>
          <option value="Kontrak">Kontrak</option>
        </select>
        <button type="submit" class="btn btn-primary btn-lg">
          <i class="save"></i> Simpan
        </button>
        </form>
          <?php
          include 'koneksi.php';
          $user = $_POST['user'];
          $pass = $_POST['pass'];
          $nik = $_POST['nik'];
          $nama_warga = $_POST['nama_warga'];
          $tempat_lahir = $_POST['tempat_lahir'];
          $tanggal_lahir = $_POST['tanggal_lahir'];
          $jenis_kelamin = $_POST['jenis_kelamin'];
          $alamat_ktp = $_POST['alamat_KTP'];
          $alamat = $_POST['alamat'];
          $desa_kelurahan = $_POST['desa/kelurahan'];
          $kabupaten_kota = $_POST['kabupatern/kota'];
          $provinsi = $_POST['Provinsi'];
          $negara = $_POST['negara'];
          $rt = $_POST['rt'];
          $rw = $_POST['rw'];
          $agama = $_POST['agama'];
          $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
          $pekerjaan = $_POST['pekerjaan'];
          $status_perkawinan = $_POST['status_perkawinan'];
          $status_tinggal = $_POST['status_tinggal'];
          $insert = "INSERT * FROM warga  (nik, nama_warga, tempat_lahir, tanggal_lahir, jenis_kelamin, alamat_ktp, alamat, desa_kelurahan, kabupaten_kota, provinsi, negara, rt, rw, agama, pendidikan_terakhir, pekerjaan, status_perkawinan, status_tinggal) VALUES ('$nik', '$nama_warga', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$alamat_ktp', '$alamat', '$desa_kelurahan', '$kabupaten_kota', '$provinsi', '$negara', '$rt', '$rw', '$agama', '$pendidikan_terakhir', '$pekerjaan', '$status_perkawinan', '$status_tinggal')";
if ($conn->query($insert) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Terjadi kesalahan: " . $conn->error;
}
$conn->close();
?>
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