# Sequence Diagram Admin - Persetujuan Peminjaman

```mermaid
sequenceDiagram
    actor Petugas
    participant Sistem
    participant Database
    actor Mahasiswa

    Petugas->>Sistem: Login
    Sistem->>Database: Verifikasi akun
    Database-->>Sistem: Login berhasil
    Petugas->>Sistem: Membuka daftar pengajuan
    Sistem->>Database: Mengambil data pengajuan
    Database-->>Sistem: Data pengajuan
    Petugas->>Sistem: Setujui / Tolak peminjaman
    Sistem->>Database: Update status peminjaman
    Database-->>Sistem: Status berhasil diperbarui
    Sistem-->>Mahasiswa: Notifikasi status peminjaman
```
