<?php
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM mhs ORDER BY ID DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #d6e9ff; /* background biru lembut */
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #003366;
        }

        a {
            background: #0055cc;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        a:hover {
            background: #003f99;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            margin-top: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.15);
            border-radius: 8px;
            overflow: hidden;
        }

        th {
            background: #003f99;
            color: white;
            padding: 12px;
            text-align: left;
            font-size: 15px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #cbd6e2;
            background: #f9faff;
        }

        tr:nth-child(even) td {
            background: #eef4ff;
        }

        tr:hover td {
            background: #dce8ff;
        }
    </style>

</head>
<body>

    <h2>Daftar Data Mahasiswa</h2>

    <a href="tambahDataMhs.php">Tambah Data Baru</a>

    <table cellpadding="8">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jml Sdr</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>JK</th>
            <th>Status</th>
            <th>Hobi</th>
            <th>Email</th>
            <th>Pass</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['tempatLahir'] ?></td>
            <td><?= $row['tanggalLahir'] ?></td>
            <td><?= $row['jmlSaudara'] ?></td>
            <td><?= $row['alamat'] ?></td>
            <td><?= $row['kota'] ?></td>
            <td><?= $row['jenisKelamin'] ?></td>
            <td><?= $row['statusKeluarga'] ?></td>
            <td><?= $row['hobi'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['pass'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>
