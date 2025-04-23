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
</head>

<body>
    <h1>Tambah Mata Kuliah</h1>

    <form method="post">
        Kode MK: <input type="text" name="kodemk" maxlength="6" required><br>
        Nama: <input type="text" name="nama" required><br>
        Jumlah SKS: <input type="number" name="sks" min="1" max="10" required><br>
        <button type="submit">Simpan</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>