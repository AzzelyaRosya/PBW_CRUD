<?php include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    
    $conn->query("INSERT INTO mahasiswa VALUES ('$npm', '$nama', '$jurusan', '$alamat')");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mahasiswa</title>
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

    input[type="text"],
    select,
    textarea {
        width: 100%;
        padding: 10px;
        margin: 8px 0 20px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
    }

    textarea {
        resize: vertical;
        min-height: 80px;
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
    <h1>Tambah Mahasiswa</h1>
    <form method="post">
        <label for="npm">NPM:</label>
        <input type="text" name="npm" id="npm" maxlength="13" required>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>

        <label for="jurusan">Jurusan:</label>
        <select name="jurusan" id="jurusan" required>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat"></textarea>

        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>