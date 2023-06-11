<?php
require 'koneksi.php';

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$alamat=$_POST['alamat'];
$kelurahan=$_POST['kelurahan'];
$agama=$_POST['agama'];
$status_perkawinan=$_POST['status_perkawinan'];
$jeniskelamin=$_POST['jeniskelamin'];

$sql = mysqli_query($conn, "SELECT * FROM warga WHERE nik='$nik'");
$cek=mysqli_num_rows($sql);

if ($cek>0) {
    ?>
    <script type="text/javascript">
        alert ('Gagal Melakukan Registrasi, NIK yang anda masukan telah digunakan');
        window.location="tambahwarga.php"
    </script>
    <?php
}else {
    $regist = mysqli_query($conn, "INSERT INTO warga values('','$nik','$nama','$tempat_lahir','$tgl_lahir','$alamat','$kelurahan','$agama','$status_perkawinan','$jeniskelamin')");

    if ($regist) {
        ?>
        <script type="text/javascript">
            alert ('Data Berhasil Ditambahkan');
            window.location="admin.php"
        </script>
        <?php
    } else {
        ?>
        <script type="text/javascript">
            alert ('Ada kesalahan dalam menambahkan warga');
            window.location="tambahwarga.php"
        </script>
        <?php
    }
}

?>
