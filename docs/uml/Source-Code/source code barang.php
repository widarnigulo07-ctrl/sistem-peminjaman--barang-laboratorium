<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang - Sistem Peminjaman Laboratorium</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
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

        .card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #1f4e78;
            color: white;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #1f4e78;
        }
    </style>
</head>

<body>

<header>
    <h1>Data Barang Laboratorium</h1>
    <p>Sistem Peminjaman Barang Laboratorium</p>
</header>

<div class="container">

    <div class="card">

        <h2>Daftar Barang</h2>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Jumlah</th>
                <th>Kondisi</th>
                <th>Status</th>
            </tr>

            <tr>
                <td>1</td>
                <td>Laptop</td>
                <td>Elektronik</td>
                <td>10</td>
                <td>Baik</td>
                <td>Tersedia</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Proyektor</td>
                <td>Elektronik</td>
                <td>5</td>
                <td>Baik</td>
                <td>Tersedia</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Kabel HDMI</td>
                <td>Aksesoris</td>
                <td>15</td>
                <td>Baik</td>
                <td>Tersedia</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Keyboard</td>
                <td>Perangkat Komputer</td>
                <td>8</td>
                <td>Baik</td>
                <td>Tersedia</td>
            </tr>

        </table>

        <a class="back" href="dashboard.php">← Kembali ke Dashboard</a>

    </div>

</div>

</body>
</html>
