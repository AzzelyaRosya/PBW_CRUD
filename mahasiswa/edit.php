<?php include '../config.php';

$npm = $_GET['npm'];
$data = $conn->query("SELECT * FROM mahasiswa WHERE npm='$npm'")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    
    $conn->query("UPDATE mahasiswa SET nama='$nama', jurusan='$jurusan', alamat='$alamat' WHERE npm='$npm'");
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
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
    <h1>Edit Mahasiswa</h1>

    <form method="post">
        <label for="npm">NPM:</label>
        <b><?= $data['npm'] ?></b>

        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="<?= $data['nama'] ?>" required>

        <label for="jurusan">Jurusan:</label>
        <select name="jurusan" id="jurusan" required>
            <option value="Teknik Informatika" <?= $data['jurusan'] == 'Teknik Informatika' ? 'selected' : '' ?>>Teknik
                Informatika</option>
            <option value="Sistem Operasi" <?= $data['jurusan'] == 'Sistem Operasi' ? 'selected' : '' ?>>Sistem Operasi
            </option>
        </select>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat"><?= $data['alamat'] ?></textarea>

        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>