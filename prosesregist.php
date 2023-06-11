<?php
require 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql = mysqli_query($conn, "SELECT * FROM user");
$cek=mysqli_num_rows($sql);
$regist = mysqli_query($conn, "INSERT INTO user values('','$username','$password')");

if ($regist) {
    ?>
    <script type="text/javascript">
        alert ('Registrasi Berhasil');
        window.location="login.php"
    </script>
    <?php
} else {
    ?>
    <script type="text/javascript">
        alert ('Ada kesalahan dalam melakukan registrasi!');
        window.location="registrasi.php"
    </script>
    <?php
}

?>


?>