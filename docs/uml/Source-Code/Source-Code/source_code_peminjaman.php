<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Barang - Sistem Peminjaman Laboratorium</title>

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
            max-width: 700px;
            margin: 30px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        label {
            display: block;
            margin-top: 15px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        textarea {
            resize: vertical;
            min-height: 90px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #1f4e78;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #163a5c;
        }

        .back {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #1f4e78;
        }
    </style>
</head>

<body>

<header>
    <h1>Form Peminjaman Barang</h1>
    <p>Sistem Peminjaman Barang Laboratorium</p>
</header>

<div class="container">

    <div class="card">

        <h2>Pengajuan Peminjaman</h2>

        <form action="#" method="post">

            <label for="nama">Nama Peminjam</label>
            <input type="text" id="nama" name="nama"
                   placeholder="Masukkan nama peminjam" required>

            <label for="barang">Pilih Barang</label>
            <select id="barang" name="barang" required>
                <option value="">-- Pilih Barang --</option>
                <option value="Laptop">Laptop</option>
                <option value="Proyektor">Proyektor</option>
                <option value="Kabel HDMI">Kabel HDMI</option>
                <option value="Keyboard">Keyboard</option>
            </select>

            <label for="jumlah">Jumlah</label>
            <input type="number" id="jumlah" name="jumlah"
                   min="1" placeholder="Masukkan jumlah" required>

            <label for="tanggal_pinjam">Tanggal Peminjaman</label>
            <input type="date" id="tanggal_pinjam"
                   name="tanggal_pinjam" required>

            <label for="tanggal_kembali">Tanggal Pengembalian</label>
            <input type="date" id="tanggal_kembali"
                   name="tanggal_kembali" required>

            <label for="keperluan">Keperluan</label>
            <textarea id="keperluan" name="keperluan"
                      placeholder="Masukkan keperluan peminjaman"
                      required></textarea>

            <button type="submit">Ajukan Peminjaman</button>

        </form>

        <a class="back" href="dashboard.php">← Kembali ke Dashboard</a>

    </div>

</div>

</body>
</html>
