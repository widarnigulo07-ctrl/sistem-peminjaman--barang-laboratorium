# Database Sistem Peminjaman Barang Laboratorium

## Tabel Users
- id
- name
- email
- password
- role

## Tabel Items
- id
- name
- category
- stock
- condition
- description

## Tabel Borrowings
- id
- user_id
- item_id
- borrow_date
- return_date
- purpose
- status

## Tabel Documents
- id
- borrowing_id
- file_name
- file_path

## Tabel Notifications
- id
- user_id
- message
- status
- created_at
