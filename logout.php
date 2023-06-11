<?php
session_start();
unset($_SESSION['username']);
$logout=session_destroy();
if ($logout) {
?>
<script type="text/javascript">
    alert ('Anda telah logout');
    window.location="index.php"
</script>
<?php
}
?>