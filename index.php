<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik | AZZELYA ROSYA DENOVYA</title>
    <style>
    :root {
        --primary: #4361ee;
        --secondary: #3f37c9;
        --accent: #4895ef;
        --light: #f8f9fa;
        --dark: #212529;
        --success: #4cc9f0;
        --danger: #f72585;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        background-color: #f5f7fa;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    header {
        background-color: var(--primary);
        color: white;
        padding: 30px 20px;
        text-align: center;
        border-radius: 8px;
        margin-bottom: 40px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    header h1 {
        margin: 0;
        font-size: 2.2rem;
    }

    header p {
        margin: 10px 0 0;
        font-size: 1.1rem;
        opacity: 0.9;
    }

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
        padding: 0 20px;
    }

    .menu-card {
        background: white;
        border-radius: 10px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 1px solid rgba(0, 0, 0, 0.05);
    }

    .menu-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .menu-card h2 {
        color: var(--primary);
        margin-top: 0;
        font-size: 1.5rem;
    }

    .menu-card p {
        color: #555;
        margin-bottom: 20px;
    }

    .menu-card a {
        display: inline-block;
        background-color: var(--primary);
        color: white;
        padding: 10px 20px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .menu-card a:hover {
        background-color: var(--secondary);
        transform: translateY(-2px);
    }

    .menu-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: var(--primary);
    }

    footer {
        text-align: center;
        margin-top: 50px;
        padding: 20px;
        color: #666;
        font-size: 0.9rem;
    }
    </style>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>AZZELYA ROSYA DENOVYA</h1>
            <p>Sistem Informasi Akademik</p>
        </header>

        <div class="menu-grid">
            <div class="menu-card">
                <div class="menu-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h2>Data Mahasiswa</h2>
                <p>Kelola data mahasiswa</p>
                <a href="mahasiswa/index.php"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
            </div>

            <div class="menu-card">
                <div class="menu-icon">
                    <i class="bi bi-list-check"></i>
                </div>
                <h2>KRS</h2>
                <p>Kelola Kartu Rencana Studi mahasiswa</p>
                <a href="krs/index.php"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
            </div>

            <div class="menu-card">
                <div class="menu-icon">
                    <i class="bi bi-book-fill"></i>
                </div>
                <h2>Mata Kuliah</h2>
                <p>Kelola data mata kuliah dan kurikulum</p>
                <a href="matakuliah/index.php"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
            </div>
        </div>

        <footer>
            <p>&copy; <?php echo date('Y'); ?> AZZELYA ROSYA DENOVYA - Sistem Informasi Akademik</p>
        </footer>
    </div>
</body>

</html>