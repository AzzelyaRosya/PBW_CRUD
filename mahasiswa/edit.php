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
</head>

<body>
    <h1>Edit Mahasiswa</h1>
    <form method="post">
        NPM: <b><?= $data['npm'] ?></b><br>
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        Jurusan:
        <select name="jurusan" required>
            <option value="Teknik Informatika" <?= $data['jurusan'] == 'Teknik Informatika' ? 'selected' : '' ?>>Teknik
                Informatika</option>
            <option value="Sistem Operasi" <?= $data['jurusan'] == 'Sistem Operasi' ? 'selected' : '' ?>>Sistem Operasi
            </option>
        </select><br>
        Alamat: <textarea name="alamat"><?= $data['alamat'] ?></textarea><br>
        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>