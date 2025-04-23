<?php include '../config.php'; 
$result = $conn->query("SELECT * FROM matakuliah");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Mata Kuliah</title>
    <style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    </style>
</head>

<body>
    <h1 style="text-align: center;">Data Mata Kuliah</h1>

    <a href="create.php"
        style="display: block; width: 100px; margin: 0 auto; text-align: center; padding: 8px 15px; background:rgb(17, 255, 0); color: white; text-decoration: none; border-radius: 5px;">Tambah
        Data</a>

    <table>
        <tr>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['kodemk'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jumlah_sks'] ?></td>
            <td>
                <a href="edit.php?kodemk=<?= $row['kodemk'] ?>"
                    style="padding: 8px 15px; background:rgb(255, 153, 0); color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;">Edit</a>
                <a href="delete.php?kodemk=<?= $row['kodemk'] ?>"
                    style="padding: 8px 15px; background:rgb(255, 0, 0); color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;"
                    onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <div style="text-align: center; margin-top: 20px;">
        <a href="../mahasiswa/index.php"
            style="padding: 8px 15px; background: #4CAF50; color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;">Ke
            Mahasiswa</a>
        <a href="../krs/index.php"
            style="padding: 8px 15px; background: #2196F3; color: white; text-decoration: none; border-radius: 5px; margin: 0 10px;">Ke
            KRS</a>
    </div>
</body>

</html>