# Component Diagram Sistem Peminjaman Barang Laboratorium

```mermaid
flowchart LR

A[Mahasiswa]
B[Petugas/Admin]

A --> C[Web Interface]
B --> C

C --> D[Controller]

D --> E[Service Layer]

E --> F[Model]

F --> G[(Database)]

E --> H[File Upload]

E --> I[Notification Service]
```
