<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembalian Barang</title>

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

        button {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            background: #1f4e78;
            color: white;
            border: none;
            border-radius: 6px;
        }

        .back {
            display: block;
            margin-top: 20px;
            text-align: center;
            color: #1f4e78;
            text-decoration: none;
        }
    </style>
</head>

<body>

<header>
    <h1>Pengembalian Barang</h1>
    <p>Sistem Peminjaman Barang Laboratorium</p>
</header>

<div class="container">

    <div class="card">

        <h2>Form Pengembalian</h2>

        <form action="#" method="post">

            <label for="id_peminjaman">ID Peminjaman</label>
            <input type="number"
                   id="id_peminjaman"
                   name="id_peminjaman"
                   placeholder="Masukkan ID peminjaman"
                   required>

            <label for="tanggal_kembali">Tanggal Pengembalian</label>
            <input type="date"
                   id="tanggal_kembali"
                   name="tanggal_kembali"
                   required>

            <label for="kondisi_barang">Kondisi Barang</label>
            <select id="kondisi_barang" name="kondisi_barang" required>
                <option value="">-- Pilih Kondisi --</option>
                <option value="Baik">Baik</option>
                <option value="Rusak Ringan">Rusak Ringan</option>
                <option value="Rusak Berat">Rusak Berat</option>
            </select>

            <label for="denda">Denda</label>
            <input type="number"
                   id="denda"
                   name="denda"
                   min="0"
                   value="0">

            <button type="submit">Simpan Pengembalian</button>

        </form>

        <a class="back" href="dashboard.php">← Kembali ke Dashboard</a>

    </div>

</div>

</body>
</html>
