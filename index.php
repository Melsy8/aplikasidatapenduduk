<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Pendataan Penduduk</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Aplikasi Pendataan Penduduk</a></h1>
            <ul>
                <li><a href="login.php">login</a></li>
            </ul>
    </header>
    <section class="section">
    <h1>Data Penduduk</h1>
    <table border="1" cellpading="10" cellspacing="0">
        
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Kelurahan/desa</th>
            <th>Agama</th>
            <th>Status Perkawinan </th>
        </tr>
        <?php

        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($conn,"SELECT*FROM warga");
        while($tampil = mysqli_fetch_array($ambildata)){
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $tampil['nama'] ?></td>
                <td><?php echo $tampil['alamat'] ?></td>
                <td><?php echo $tampil['kelurahan'] ?></td>
                <td><?php echo $tampil['agama'] ?></td>
                <td><?php echo $tampil['status_perkawinan'] ?></td>
            </tr>
            <?php
            $no++;
        }
        ?>

    </table>

    </section>
</body>

</html>