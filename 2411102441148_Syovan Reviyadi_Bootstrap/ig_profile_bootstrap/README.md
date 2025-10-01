# Instagram Profile Clone (Bootstrap 5)

## Struktur File
- index.html → file utama
- assets/css/custom.css → style tambahan (opsional)
- assets/img/ → folder berisi gambar profil dan feed

## Cara Build/Run
Cukup buka file `index.html` di browser (tidak perlu server tambahan).

## Dependensi
- Bootstrap 5 (CDN)
- Gambar profil dan feed di folder `assets/img`

## Pertanyaan README

**1. Mengapa memilih konfigurasi col tertentu untuk tiap breakpoint?**  
Agar layout responsif:  
- Mobile (≤576px): 1 kolom agar konten tetap terbaca jelas.  
- Tablet (≥768px): 2–3 kolom agar lebih efisien.  
- Desktop (≥992px): 4 kolom agar galeri terlihat penuh.  

**2. Bagaimana memastikan tombol Follow/Edit tetap mudah dijangkau di mobile?**  
Tombol diberi utilitas Bootstrap (`order-*`, `btn-sm`) sehingga selalu muncul dekat username dan tidak memakan banyak ruang.  

**3. Jika postingan bertambah jadi 50, apa potensi masalah dan solusi gridnya?**  
Masalah: halaman jadi panjang dan berat.  
Solusi: tetap gunakan sistem grid Bootstrap agar otomatis wrap ke baris baru, bisa juga tambahkan pagination atau infinite scroll.  
