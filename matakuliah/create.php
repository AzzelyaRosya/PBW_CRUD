<?php include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $kodemk = $_POST['kodemk'];
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    
    $conn->query("INSERT INTO matakuliah VALUES ('$kodemk', '$nama', '$sks')");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mata Kuliah</title>
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
        color: #2980b9;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <h1>Tambah Mata Kuliah</h1>

    <form method="post">
        <label for="kodemk">Kode MK:</label>
        <input type="text" name="kodemk" id="kodemk" maxlength="6" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="sks">Jumlah SKS:</label>
        <input type="number" name="sks" id="sks" min="1" max="10" required>

        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>