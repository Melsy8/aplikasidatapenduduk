<?php
require 'koneksi.php';

$username=$_POST['username'];
$pass=$_POST['password'];
$sql= mysqli_query($conn,"SELECT * FROM user WHERE username='$username' and password='$pass'");
$cek=mysqli_num_rows($sql);

if ($cek>0) {
    $data=mysqli_fetch_array($sql);
    session_start();
    $_SESSION['username']=$data['username'];
    $_SESSION['password']=$data['password'];

    header('location:admin.php');
}else {
    ?>
    <script type="text/javascript">
        alert ('Ada kesalahan dalam melakukan login!');
        window.location="login.php"
    </script>
    <?php
}
?>