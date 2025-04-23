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
</head>

<body>
    <h1>Tambah Mahasiswa</h1>
    <form method="post">
        NPM: <input type="text" name="npm" maxlength="13" required><br>
        Nama: <input type="text" name="nama" required><br>
        Jurusan:
        <select name="jurusan" required>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select><br>
        Alamat: <textarea name="alamat"></textarea><br>
        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>