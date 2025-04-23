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
</head>

<body>
    <h1>Edit Mata Kuliah</h1>
    <form method="post">
        Kode MK: <b><?= $data['kodemk'] ?></b><br>
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        Jumlah SKS: <input type="number" name="sks" value="<?= $data['jumlah_sks'] ?>" min="1" max="10" required><br>
        <button type="submit">Update</button>
        <a href="index.php">Batal</a>
    </form>
</body>

</html>