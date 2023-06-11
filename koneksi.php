<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname   = 'datapenduduk';
$conn = mysqli_connect($hostname, $username, $password, $dbname);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function registrasi($data){
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($data["password"]);
    $password2 = mysqli_real_escape_string($data["password2"]);

    if ($password !== $password2) {
        echo "<script>
        alert('konfirmasi password tidak sesuai!');
        </script>";
        return false;
    }
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM warga WHERE id = $id");
    return mysqli_affected_rows($conn);
}