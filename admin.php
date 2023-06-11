<?php 
if (isset($_GET['url'])) {
  $url=$_GET['url'];
  switch ($url) {
    case 'editwarga';
      include "editwarga.php";
      break;
    case 'deletewarga';
      include "deletewarga.php";
      break;
  }
}else {
    ?>
<!DOCTYPE html>
<html>

<head>
    <title>halaman admin</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid black;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>

<body>
    <h1>Data Penduduk</h1>
    <a href="logout.php">Logout</a>
    <a href="tambahwarga.php">Tambah Penduduk</a>
    <table border="1" cellpading="10" cellspacing="0">
        
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>nama</th>
            <th>tempat lahir</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>kelurahan/desa</th>
            <th>agama</th>
            <th>status perkawinan </th>
            <th>jeniskelamin</th>
            <th>action</th>
        </tr>
        <?php

        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($conn,"SELECT*FROM warga");
        while($tampil = mysqli_fetch_array($ambildata)){
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $tampil['nik'] ?></td>
                <td><?php echo $tampil['nama'] ?></td>
                <td><?php echo $tampil['tempat_lahir'] ?></td>
                <td><?php echo $tampil['tgl_lahir'] ?></td>
                <td><?php echo $tampil['alamat'] ?></td>
                <td><?php echo $tampil['kelurahan'] ?></td>
                <td><?php echo $tampil['agama'] ?></td>
                <td><?php echo $tampil['status_perkawinan'] ?></td>
                <td><?php echo $tampil['jeniskelamin'] ?></td>
                <td>
                    <a href="?url=editwarga&id_warga=<?php echo $tampil['id_warga']?>">edit</a>
                    <a href="?url=deletewarga&id_warga=<?php echo $tampil['id_warga']?>">delete</a>
                </td>
            </tr>
            <?php
            $no++;
        }
        ?>
    </table>

</body>

</html>
<?php
}?>