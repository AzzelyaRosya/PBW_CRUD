<?php 
include '../config.php';
$query = "SELECT krs.id, mahasiswa.nama, matakuliah.nama AS matkul, matakuliah.jumlah_sks 
          FROM krs
          JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm
          JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar KRS</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Daftar KRS</h1>

    <a href="create.php"
        style="display: block; width: 100px; margin: 0 auto; text-align: center; padding: 8px 15px; background:rgb(17, 255, 0); color: white; text-decoration: none; border-radius: 5px;">Tambah
        Data</a>

    <table style="margin-top: 3%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Mata Kuliah</th>
            <th>Keterangan</th>
            <!-- <th>Aksi</th> -->
        </tr>
        <?php $no = 1; while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['matkul']; ?></td>
            <td><?= "$row[nama] Mengambil $row[matkul] ($row[jumlah_sks] SKS)"; ?></td>
            <!-- <td>
                <a href="edit.php?id=<?= $row['id'] ?>"
                    style="padding: 8px 15px; background:rgb(255, 153, 0); color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>"
                    style="padding: 8px 15px; background:rgb(255, 0, 0); color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;"
                    onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td> -->
        </tr>
        <?php endwhile; ?>
    </table>

    <div style="text-align: center; margin-top: 20px;">
        <a href="../mahasiswa/index.php"
            style="padding: 8px 15px; background: #4CAF50; color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;">Ke
            Mahasiswa</a>
        <a href="../matakuliah/index.php"
            style="padding: 8px 15px; background: #2196F3; color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;">Ke
            Mata Kuliah</a>
    </div>
</body>

</html>