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
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f4f7f8;
        color: #333;
        padding: 40px;
    }

    h1 {
        text-align: center;
        color: #2c3e50;
    }

    form {
        max-width: 600px;
        margin: 30px auto;
        padding: 30px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    select {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
    }

    button {
        background-color: #27ae60;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
    }

    button:hover {
        background-color: #219150;
    }

    a {
        display: block;
        text-align: center;
        margin-top: 15px;
        color: #c0392b;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <h1>Tambah KRS</h1>
    <form method="post">
        <label for="npm">Mahasiswa:</label>
        <select name="npm" id="npm" required>
            <?php 
            $mhs = $conn->query("SELECT * FROM mahasiswa");
            while($row = $mhs->fetch_assoc()): ?>
            <option value="<?= $row['npm'] ?>"><?= $row['nama'] ?> (<?= $row['npm'] ?>)</option>
            <?php endwhile; ?>
        </select>

        <label for="kodemk">Mata Kuliah:</label>
        <select name="kodemk" id="kodemk" required>
            <?php 
            $mk = $conn->query("SELECT * FROM matakuliah");
            while($row = $mk->fetch_assoc()): ?>
            <option value="<?= $row['kodemk'] ?>"><?= $row['nama'] ?> (<?= $row['jumlah_sks'] ?> SKS)</option>
            <?php endwhile; ?>
        </select>

        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>