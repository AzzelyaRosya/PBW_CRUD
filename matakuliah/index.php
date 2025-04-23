<?php
require_once '../config.php';

// Get all course data
$result = $conn->query("SELECT * FROM matakuliah");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mata Kuliah | Sistem Akademik</title>
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
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Data Mata Kuliah</h1>
        </header>

        <div class="action-bar">
            <a href="create.php" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Tambah Mata Kuliah
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['kodemk']) ?></td>
                    <td><?= htmlspecialchars($row['nama']) ?></td>
                    <td><?= htmlspecialchars($row['jumlah_sks']) ?></td>
                    <td class="action-cell">
                        <a href="edit.php?kodemk=<?= urlencode($row['kodemk']) ?>" class="btn btn-warning" title="Edit">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <a href="delete.php?kodemk=<?= urlencode($row['kodemk']) ?>" class="btn btn-danger"
                            title="Hapus"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">
                            <i class="bi bi-trash"></i> Hapus
                        </a>
                    </td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                    <td colspan="4" class="text-center">Tidak ada data mata kuliah</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="nav-buttons">
            <a href="../mahasiswa/index.php" class="btn btn-primary">
                <i class="bi bi-people"></i> Data Mahasiswa
            </a>
            <a href="../krs/index.php" class="btn btn-primary">
                <i class="bi bi-list-check"></i> KRS
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