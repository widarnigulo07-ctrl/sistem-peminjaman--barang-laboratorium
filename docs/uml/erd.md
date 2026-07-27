# Entity Relationship Diagram (ERD)

## Tabel MAHASISWA

| Field | Tipe Data | Keterangan |
|---|---|---|
| id_mahasiswa | INT | Primary Key |
| nim | VARCHAR(20) | Nomor Induk Mahasiswa |
| nama | VARCHAR(100) | Nama mahasiswa |
| email | VARCHAR(100) | Email mahasiswa |
| password | VARCHAR(255) | Password |

## Tabel PETUGAS

| Field | Tipe Data | Keterangan |
|---|---|---|
| id_petugas | INT | Primary Key |
| nama | VARCHAR(100) | Nama petugas |
| username | VARCHAR(50) | Username |
| password | VARCHAR(255) | Password |

## Tabel BARANG

| Field | Tipe Data | Keterangan |
|---|---|---|
| id_barang | INT | Primary Key |
| nama_barang | VARCHAR(100) | Nama barang |
| jumlah | INT | Jumlah barang |
| kondisi | VARCHAR(50) | Kondisi barang |
| status | VARCHAR(30) | Status ketersediaan |

## Tabel PEMINJAMAN

| Field | Tipe Data | Keterangan |
|---|---|---|
| id_peminjaman | INT | Primary Key |
| id_mahasiswa | INT | Foreign Key |
| id_petugas | INT | Foreign Key |
| tanggal_pinjam | DATE | Tanggal peminjaman |
| tanggal_kembali | DATE | Tanggal pengembalian |
| status | VARCHAR(30) | Status peminjaman |

## Tabel DETAIL PEMINJAMAN

| Field | Tipe Data | Keterangan |
|---|---|---|
| id_detail | INT | Primary Key |
| id_peminjaman | INT | Foreign Key |
| id_barang | INT | Foreign Key |
| jumlah | INT | Jumlah barang |
| kondisi_barang | VARCHAR(50) | Kondisi barang |

## Relasi Antar Tabel

- MAHASISWA dapat melakukan banyak PEMINJAMAN.
- PETUGAS dapat memverifikasi banyak PEMINJAMAN.
- PEMINJAMAN memiliki satu atau lebih DETAIL PEMINJAMAN.
- BARANG dapat tercatat dalam banyak DETAIL PEMINJAMAN.

   
      
      
