<?php
$username = $_POST['username'] ?? 'Pengguna';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Peminjaman Laboratorium</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f8;
        }

        header {
            background: #1f4e78;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 20px;
        }

        .welcome {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .menu {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 18px;
            background: #1f4e78;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .logout {
            display: block;
            margin-top: 25px;
            text-align: center;
            color: #1f4e78;
            text-decoration: none;
        }
    </style>
</head>

<body>

<header>
    <h1>Dashboard</h1>
    <p>Sistem Peminjaman Barang Laboratorium</p>
</header>

<div class="container">

    <div class="welcome">
        <h2>Selamat datang, <?php echo htmlspecialchars($username); ?>!</h2>
        <p>Silakan pilih menu yang ingin digunakan.</p>
    </div>

    <div class="menu">

        <div class="card">
            <h3>Data Barang</h3>
            <p>Melihat daftar barang laboratorium.</p>
            <a href="barang.php">Lihat Barang</a>
        </div>

        <div class="card">
            <h3>Peminjaman</h3>
            <p>Mengajukan peminjaman barang.</p>
            <a href="peminjaman.php">Ajukan Peminjaman</a>
        </div>

        <div class="card">
            <h3>Riwayat</h3>
            <p>Melihat riwayat peminjaman.</p>
            <a href="peminjaman.php">Lihat Riwayat</a>
        </div>

    </div>

    <a class="logout" href="index.php">← Keluar</a>

</div>

</body>
</html>
