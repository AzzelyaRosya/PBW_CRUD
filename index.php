<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 20px;
    }

    .header {
        background-color: #2c3e50;
        color: white;
        padding: 20px;
        text-align: center;
        border-radius: 5px;
        margin-bottom: 30px;
    }

    .menu-container {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .menu-card {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 250px;
        padding: 20px;
        text-align: center;
        transition: transform 0.3s;
    }

    .menu-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .menu-card h2 {
        color: #2c3e50;
        margin-top: 0;
    }

    .menu-card a {
        display: inline-block;
        background-color: #3498db;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        text-decoration: none;
        margin-top: 15px;
        transition: background-color 0.3s;
    }

    .menu-card a:hover {
        background-color: #2980b9;
    }

    .footer {
        text-align: center;
        margin-top: 40px;
        color: #7f8c8d;
        font-size: 14px;
    }
    </style>
</head>

<body>
    <div class="header">
        <h1>AZZELYA ROSYA DENOVYA</h1>
        <p>Sistem Informasi Akademik</p>
    </div>

    <div class="menu-container">
        <div class="menu-card">
            <h2>Mahasiswa</h2>
            <p>Kelola data mahasiswa</p>
            <a href="mahasiswa/index.php">Masuk</a>
        </div>

        <div class="menu-card">
            <h2>KRS</h2>
            <p>Kartu Rencana Studi</p>
            <a href="krs/index.php">Masuk</a>
        </div>

        <div class="menu-card">
            <h2>Mata Kuliah</h2>
            <p>Kelola data mata kuliah</p>
            <a href="matakuliah/index.php">Masuk</a>
        </div>
    </div>

    <div class="footer">
        <p>&copy; <?php echo date('Y'); ?> AZZELYA ROSYA DENOVYA - All Rights Reserved</p>
    </div>
</body>

</html>