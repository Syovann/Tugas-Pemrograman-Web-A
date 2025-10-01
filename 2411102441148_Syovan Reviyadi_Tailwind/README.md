# Instagram Profile with Tailwind CSS

## Desain
- Struktur: Header (foto profil, nama, tombol follow), Bio, Statistik, Feed (12 gambar), Footer.
- Mobile-first: dimulai grid `grid-cols-1` untuk mobile, lalu `sm:grid-cols-2`, `md:grid-cols-3`, `lg:grid-cols-4`.
- Utility classes dipakai untuk spacing (`p-4`, `gap-2`), alignment (`flex`, `items-center`, `justify-center`), shadow, dan rounded.

## Pertanyaan README
1. **Keputusan grid-cols/gap di tiap breakpoint**  
   - Mobile: `grid-cols-1` → layar kecil, fokus satu gambar.  
   - Tablet: `sm:grid-cols-2` / `md:grid-cols-3` → cukup lebar untuk 2–3 gambar.  
   - Desktop: `lg:grid-cols-4` → layar lebar, tampilkan lebih banyak konten.  
   - Gap kecil (`gap-2`) agar feed mirip Instagram.

2. **Pemanfaatan utility responsive Tailwind**  
   - Prefix `sm:`, `md:`, `lg:` untuk mengubah jumlah kolom feed.  
   - Tombol follow otomatis menyesuaikan posisi (`flex-col` → `sm:flex-row`).  
   - Statistik rapi dengan `grid grid-cols-3`.

3. **Trade-off utility classes vs CSS custom**  
   - Banyak utility classes = cepat, konsisten, hasil langsung terlihat.  
   - Kekurangan: HTML bisa terlihat panjang.  
   - Custom CSS = lebih rapi & reusable, tapi butuh setup tambahan.  
   - Untuk project kecil → efektif pakai utility classes.

## Deliverables
- `index.html` → halaman utama
- `README.md` → penjelasan desain & refleksi
- `assets/img/` berisi dummy images (kosong, bisa isi manual atau download dari picsum.photos)
