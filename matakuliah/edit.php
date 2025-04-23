<?php include '../config.php';

$kodemk = $_GET['kodemk'];
$data = $conn->query("SELECT * FROM matakuliah WHERE kodemk='$kodemk'")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    
    $conn->query("UPDATE matakuliah SET nama='$nama', jumlah_sks='$sks' WHERE kodemk='$kodemk'");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Mata Kuliah</title>
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
        max-width: 500px;
        margin: 30px auto;
        padding: 30px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
    }

    b {
        display: block;
        margin-bottom: 20px;
        font-size: 16px;
        color: #555;
    }

    button {
        background-color: #2980b9;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: bold;
        width: 100%;
    }

    button:hover {
        background-color: #2471a3;
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
    <h1>Edit Mata Kuliah</h1>

    <form method="post">
        <label for="kodemk">Kode MK:</label>
        <b><?= $data['kodemk'] ?></b>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>" required>

        <label for="sks">Jumlah SKS:</label>
        <input type="number" name="sks" id="sks" value="<?= $data['jumlah_sks'] ?>" min="1" max="10" required>

        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>