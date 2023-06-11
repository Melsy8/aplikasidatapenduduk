<?php
require "koneksi.php";

$id=$_GET['id_warga'];

$delete= mysqli_query($conn,"DELETE FROM warga WHERE id_warga='$id'");
if ($delete) {
    ?>
    <script type="text/javascript">
        alert ('Warga berhasil di hapus');
        window.location="admin.php"
    </script>
    <?php
}
?>