<?php
require_once '../config.php';

$query = "SELECT krs.id, mahasiswa.nama, matakuliah.nama AS matkul, matakuliah.jumlah_sks 
          FROM krs
          JOIN mahasiswa ON krs.mahasiswa_npm = mahasiswa.npm
          JOIN matakuliah ON krs.matakuliah_kodemk = matakuliah.kodemk";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar KRS | Sistem Akademik</title>
    <style>
    :root {
        --primary: #4361ee;
        --secondary: #3f37c9;
        --accent: #4895ef;
        --light: #f8f9fa;
        --dark: #212529;
        --success: #4cc9f0;
        --danger: #f72585;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: var(--dark);
        background-color: #f5f7fa;
        padding: 0;
        margin: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    header {
        text-align: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid #e0e0e0;
    }

    h1 {
        color: var(--primary);
        margin-bottom: 10px;
    }

    .action-bar {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        padding: 8px 16px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .btn-primary {
        background-color: var(--primary);
        color: white;
    }

    .btn-primary:hover {
        background-color: var(--secondary);
        transform: translateY(-2px);
    }

    .btn-success {
        background-color: var(--success);
        color: white;
    }

    .btn-danger {
        background-color: var(--danger);
        color: white;
    }

    .btn-warning {
        background-color: #ffaa00;
        color: white;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background: white;
        border-radius: 8px;
        overflow: hidden;
    }

    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #e0e0e0;
    }

    th {
        background-color: var(--primary);
        color: white;
        font-weight: 600;
    }

    tr:hover {
        background-color: #f8f9fa;
    }

    .action-cell {
        display: flex;
        gap: 8px;
    }

    .nav-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 30px;
    }

    .keterangan {
        color: #666;
    }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Daftar KRS</h1>
        </header>

        <div class="action-bar">
            <a href="create.php" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Data KRS
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Mata Kuliah</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                <?php $no = 1; while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['matkul']) ?></td>
                    <td class="keterangan">
                        <?= htmlspecialchars($row['nama']) ?> mengambil <?= htmlspecialchars($row['matkul']) ?>
                        (<?= htmlspecialchars($row['jumlah_sks']) ?> SKS)
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data KRS</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="nav-buttons">
            <a href="../mahasiswa/index.php" class="btn btn-primary">
                <i class="bi bi-people"></i> Data Mahasiswa
            </a>
            <a href="../matakuliah/index.php" class="btn btn-primary">
                <i class="bi bi-book"></i> Mata Kuliah
            </a>
            <a href="../index.php" class="btn btn-primary">
                <i class="bi bi-house"></i> Menu Utama
            </a>
        </div>
    </div>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</body>

</html>

<?php
$conn->close();
?>