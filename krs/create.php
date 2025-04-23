<?php
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $npm = $_POST['npm'];
    $kodemk = $_POST['kodemk'];
    
    $conn->query("INSERT INTO krs (mahasiswa_npm, matakuliah_kodemk) VALUES ('$npm', '$kodemk')");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah KRS</title>
</head>

<body>
    <h1>Tambah KRS</h1>
    <form method="post">
        <label>Mahasiswa:
            <select name="npm" required>
                <?php 
                $mhs = $conn->query("SELECT * FROM mahasiswa");
                while($row = $mhs->fetch_assoc()): ?>
                <option value="<?= $row['npm'] ?>"><?= $row['nama'] ?></option>
                <?php endwhile; ?>
            </select>
        </label><br>

        <label>Mata Kuliah:
            <select name="kodemk" required>
                <?php 
                $mk = $conn->query("SELECT * FROM matakuliah");
                while($row = $mk->fetch_assoc()): ?>
                <option value="<?= $row['kodemk'] ?>"><?= $row['nama'] ?> (<?= $row['jumlah_sks'] ?> SKS)</option>
                <?php endwhile; ?>
            </select>
        </label><br>

        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>