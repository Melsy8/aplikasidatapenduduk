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
            <th>NIK</th>
            <th>nama</th>
            <th>tempat lahir</th>
            <th>tanggal lahir</th>
            <th>alamat</th>
            <th>kelurahan/desa</th>
            <th>agama</th>
            <th>status perkawinan </th>
            <th>negara</th>
        </tr>
        <tr>
        </tr>
    </table>

</body>

</html>