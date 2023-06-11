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

$query = mysqli_query($conn,"UPDATE warga SET nik='$nik', nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', kelurahan='$kelurahan', agama='$agama', status_perkawinan='$status_perkawinan', jeniskelamin='$jeniskelamin' WHERE nik='$nik'");

if ($query) {
    ?>
    <script type="text/javascript">
        alert ('Data berhasil diubah!');
        window.location="admin.php"
    </script>
    <?php
}else {
    ?>
    <script type="text/javascript">
        alert ('Data gagal diubah');
        window.location="admin.php"
    </script>
    <?php
}

?>
