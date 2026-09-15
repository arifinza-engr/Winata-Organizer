Buatkan sebuah website demo premium untuk bisnis wedding organizer bernama **Winata Organizer**, berlokasi di Semarang.

Tujuan website ini bukan sekadar company profile, tetapi harus dirancang sebagai **high-converting landing page** yang membuat calon klien merasa yakin, melihat kualitas portfolio, memahami layanan, lalu melakukan konsultasi melalui WhatsApp.

## Tech Stack

Gunakan:

- Laravel versi terbaru yang stabil
- Blade Template
- Tailwind CSS
- GSAP
- GSAP ScrollTrigger
- Alpine.js hanya jika benar-benar diperlukan
- Vite
- Lucide Icons atau ikon setara
- Tidak perlu database
- Tidak perlu autentikasi
- Tidak perlu admin panel
- Semua data gunakan static/mock data yang mudah diganti
- Struktur kode harus clean, modular, reusable, dan production-ready

Website harus ringan, responsive, mobile-first, SEO-friendly, dan terlihat sangat profesional.

---

# Brand Direction

Nama brand:

**Winata Organizer**

Kategori:

Wedding Organizer / Wedding Planner

Lokasi:

Semarang, Jawa Tengah

Positioning:

Wedding organizer profesional untuk pasangan yang ingin menikmati hari pernikahan tanpa direpotkan oleh koordinasi teknis.

Tone:

- Elegant
- Romantic
- Modern
- Premium
- Warm
- Trustworthy

Hindari desain wedding website yang terlalu ramai, terlalu pink, terlalu feminin, atau terlihat seperti template murah.

Gunakan visual direction:

- ivory / off-white
- champagne
- warm beige
- dark charcoal
- subtle gold accent

Typography:

Gunakan kombinasi serif elegan untuk heading dan sans-serif modern untuk body.

Contoh:

- Playfair Display / Cormorant Garamond untuk heading
- Inter / Manrope / Plus Jakarta Sans untuk body

Spacing harus luas dan premium.

Gunakan border tipis, subtle shadow, rounded corner secukupnya.

Jangan menggunakan gradient mencolok.

---

# Main Conversion Goal

Primary CTA:

**Konsultasi via WhatsApp**

Secondary CTA:

**Lihat Portfolio**

CTA WhatsApp harus muncul di beberapa bagian website secara natural.

Tambahkan floating WhatsApp button di desktop dan mobile.

Gunakan placeholder WhatsApp URL yang mudah diganti dari config.

---

# Homepage Structure

## 1. Premium Navigation

Navbar transparan di atas hero.

Isi:

- Logo Winata Organizer
- Home
- About
- Services
- Portfolio
- Testimonials
- FAQ
- Contact

CTA kanan:

**Konsultasi Sekarang**

Saat scroll navbar berubah menjadi solid / glassmorphism ringan.

Buat sticky navigation yang tetap elegan.

---

# 2. Cinematic Hero Section

Buat hero full viewport dengan visual wedding premium.

Gunakan placeholder image/video yang nantinya mudah diganti.

Contoh copy:

Small text:

**Wedding Organizer Semarang**

Main headline:

**Your Perfect Day, Beautifully Organized.**

Subheadline:

Kami membantu setiap detail pernikahan berjalan dengan tenang, terarah, dan berkesan — agar Anda dapat menikmati hari istimewa tanpa sibuk mengurus koordinasi.

CTA:

**Konsultasikan Pernikahan Anda**

Secondary CTA:

**Explore Our Weddings**

Tambahkan trust indicator kecil:

- Professional Team
- Personalized Planning
- Seamless Coordination

Gunakan GSAP entrance animation:

- hero image slow scale
- heading reveal
- stagger text
- buttons fade-up

Animasi harus subtle dan premium.

Jangan berlebihan.

---

# 3. Social Proof Strip

Setelah hero, tampilkan quick trust indicators.

Contoh:

**50+**
Wedding Events

**4.9/5**
Client Satisfaction

**Semarang**
& Surrounding Areas

**Professional**
Wedding Team

Gunakan mock data dan beri komentar di code bahwa angka harus diverifikasi sebelum production.

Animasi number counter dengan GSAP saat masuk viewport.

---

# 4. Emotional Introduction

Section editorial style.

Headline:

**Because Your Wedding Day Should Feel Effortless**

Copy:

Hari pernikahan seharusnya menjadi momen untuk dinikmati, bukan hari penuh koordinasi vendor, rundown, dan masalah teknis.

Winata Organizer membantu mengelola setiap detail dari persiapan hingga acara selesai, sehingga Anda dan keluarga dapat fokus menikmati setiap momen.

Gunakan layout asymmetrical:

- satu foto besar
- satu foto kecil overlap
- elegant typography

Gunakan parallax ringan dengan GSAP ScrollTrigger.

---

# 5. Why Choose Winata

Buat section:

**Why Couples Choose Winata**

Card benefit:

### Personalized Planning

Setiap pasangan memiliki konsep dan kebutuhan berbeda. Planning disesuaikan dengan karakter, kebutuhan, dan budget acara.

### Detail-Oriented Coordination

Tim memastikan rundown, vendor, keluarga, venue, dan seluruh kebutuhan teknis terkoordinasi dengan baik.

### Calm Wedding Experience

Calon pengantin tidak perlu sibuk menangani masalah teknis pada hari pernikahan.

### Trusted Vendor Coordination

Koordinasi dengan vendor dibuat terstruktur sehingga semua pihak mengetahui timeline dan tanggung jawab.

Tambahkan micro-interaction hover.

---

# 6. Services Section

Buat service cards premium.

Services:

### Wedding Organizer

Pendampingan dan koordinasi penuh di hari pernikahan.

### Wedding Planner

Perencanaan pernikahan dari konsep hingga hari pelaksanaan.

### Engagement

Koordinasi acara lamaran yang intimate dan terstruktur.

### Intimate Wedding

Wedding kecil dengan experience personal dan detail-oriented.

### Traditional Wedding

Koordinasi acara pernikahan dengan rangkaian adat.

### Custom Wedding

Konsep khusus sesuai kebutuhan pasangan.

Setiap card memiliki:

- image
- title
- short description
- Learn More

Hover image scale menggunakan GSAP/CSS.

---

# 7. Featured Weddings / Portfolio

Ini merupakan salah satu section terpenting.

Headline:

**Selected Weddings**

Subheadline:

A glimpse into celebrations we've had the privilege to organize.

Buat masonry / editorial gallery.

Minimal 6–8 foto.

Kategori contoh:

- Elegant Indoor Wedding
- Traditional Javanese Wedding
- Garden Wedding
- Intimate Wedding
- Modern Ballroom Wedding

Klik foto membuka elegant lightbox.

Gunakan GSAP stagger reveal saat scroll.

Tambahkan CTA:

**View More Weddings**

Jangan membuat galeri terlihat seperti grid ecommerce.

Harus terasa seperti luxury editorial wedding magazine.

---

# 8. Wedding Journey

Buat section yang menjelaskan proses bekerja dengan Winata.

Headline:

**Your Journey With Winata**

Steps:

01

**Tell Us Your Story**

Konsultasikan konsep, kebutuhan, tanggal, venue, dan gambaran wedding Anda.

02

**Planning & Preparation**

Kami membantu menyusun timeline, kebutuhan vendor, dan detail teknis acara.

03

**Vendor Coordination**

Semua vendor dikordinasikan berdasarkan timeline dan kebutuhan acara.

04

**Wedding Day Execution**

Tim Winata memastikan rundown dan seluruh aktivitas berjalan sesuai rencana.

05

**Enjoy Your Moment**

Anda tinggal menikmati hari pernikahan bersama pasangan dan keluarga.

Gunakan animated line / progress timeline ketika user scroll.

---

# 9. Testimonials

Headline:

**Words From Our Couples**

Buat 4–6 testimonial mock yang realistis.

Contoh:

"Tim Winata benar-benar membantu kami menikmati acara tanpa harus sibuk memikirkan rundown dan vendor. Semua berjalan jauh lebih tenang dari yang kami bayangkan."

— Andi & Rina

Buat testimonial card premium.

Bisa carousel horizontal ringan.

Jangan autoplay terlalu agresif.

Tambahkan rating stars.

Mock testimonial harus diberi label/comment di source code bahwa harus diganti dengan review asli sebelum website dipublikasikan.

---

# 10. Trust / Problem-Solution Section

Buat section yang lebih emosional.

Headline:

**We Handle the Details. You Live the Moment.**

Split section.

Left:

Wedding photo.

Right:

List:

- Vendor coordination
- Timeline management
- Family coordination
- Ceremony preparation
- Reception flow
- Guest management
- Emergency handling

Copy:

Dari detail kecil sampai koordinasi besar, tim kami berada di belakang layar untuk memastikan hari pernikahan berjalan sesuai rencana.

---

# 11. Venue / Vendor Experience

Buat section:

**Experienced With Every Kind of Celebration**

Kategori:

- Ballroom
- Hotel
- Outdoor
- Traditional Venue
- Intimate Venue

Buat logo placeholder vendor / venue agar website terlihat established.

Namun tulis dengan jelas dalam source code bahwa logo hanya placeholder demo dan tidak boleh dianggap sebagai partnership resmi.

---

# 12. FAQ

Buat accordion FAQ.

Pertanyaan:

- Kapan sebaiknya booking wedding organizer?
- Apakah Winata bisa membantu sejak tahap planning?
- Apakah bisa menggunakan vendor pilihan sendiri?
- Apakah melayani wedding di luar Semarang?
- Apa perbedaan Wedding Organizer dan Wedding Planner?
- Bagaimana proses konsultasi pertama?
- Apakah tersedia paket custom?

Gunakan smooth accordion animation.

---

# 13. High Conversion CTA

Buat CTA section besar sebelum footer.

Headline:

**Let's Create a Wedding You'll Always Remember**

Subheadline:

Ceritakan rencana pernikahan Anda kepada kami. Konsultasi awal dapat dilakukan melalui WhatsApp.

Button:

**Mulai Konsultasi via WhatsApp**

Tambahkan text kecil:

No pressure. Tell us your ideas first.

Gunakan wedding image sebagai background dengan elegant overlay.

---

# 14. Contact Section

Tampilkan:

Winata Organizer

Semarang, Jawa Tengah

WhatsApp

Instagram

Google Maps

Business Hours

Tambahkan:

**Schedule Consultation**

Form sederhana:

- Nama
- WhatsApp
- Wedding Date
- Venue
- Estimated Guests
- Message

Karena ini demo tanpa backend, ketika submit tampilkan elegant toast:

"Terima kasih. Untuk demo ini, silakan lanjutkan konsultasi melalui WhatsApp."

Lalu arahkan ke WhatsApp.

---

# 15. Footer

Elegant footer dengan:

Logo

Short description

Navigation

Services

Social Media

Contact

Copyright

Small text:

Designed for meaningful celebrations.

---

# GSAP Animation Direction

Gunakan GSAP secara profesional.

Implementasikan:

### Hero

- fade
- stagger
- scale image
- text reveal

### Scroll sections

Gunakan ScrollTrigger.

- fade-up
- image reveal
- stagger card
- number counter
- subtle parallax
- timeline progress

### Portfolio

Image clipping / reveal animation.

### Text

Gunakan masked text reveal untuk beberapa headline besar.

### Navigation

Smooth appearance ketika scroll.

PENTING:

Animasi harus meningkatkan perceived quality website.

Jangan gunakan terlalu banyak animation.

Tidak boleh menyebabkan:

- jank
- layout shift
- performance issue
- animasi berlebihan
- sulit dibaca

Support prefers-reduced-motion.

---

# UX Requirements

Website harus:

- fully responsive
- mobile-first
- fast loading
- smooth scrolling
- accessible
- semantic HTML
- keyboard accessible
- good contrast
- optimized images
- lazy loading

Target Lighthouse:

Performance > 90

Accessibility > 90

Best Practices > 90

SEO > 90

---

# SEO

Tambahkan metadata:

Title:

Winata Organizer | Wedding Organizer Semarang

Description:

Wedding Organizer Semarang untuk membantu Anda merencanakan dan menjalankan hari pernikahan dengan tenang, terstruktur, dan berkesan.

Tambahkan:

- Open Graph
- LocalBusiness schema
- WeddingPlanning schema jika relevan
- canonical placeholder
- favicon
- sitemap-ready structure

---

# Project Architecture

Gunakan struktur Laravel yang clean.

Contoh:

resources/views/

- layouts/app.blade.php
- pages/home.blade.php
- components/
- sections/

resources/js/

- app.js
- animations/
  - hero.js
  - scroll.js
  - portfolio.js

resources/css/

- app.css

config/

- site.php

Masukkan:

- WhatsApp
- Instagram
- address
- email
- brand info

ke config agar mudah diganti.

Jangan hard-code data yang seharusnya configurable.

---

# Data Structure

Buat static data terstruktur untuk:

- services
- testimonials
- portfolio
- FAQs
- statistics
- wedding process

Boleh menggunakan config PHP atau dedicated static data arrays.

Jangan menulis semua konten langsung secara repetitive di Blade.

Gunakan loop dan reusable components.

---

# Demo Mode

Website ini dibuat untuk sales demo.

Tambahkan flag:

DEMO_MODE=true

Jika aktif:

- tampilkan discreet banner kecil:
  "Website Concept Preview"
- form tidak benar-benar mengirim data
- dummy metrics tetap ditampilkan
- placeholder partnership tidak dianggap official

Banner jangan merusak visual premium website.

---

# Important Sales Requirement

Website harus terlihat seolah Winata Organizer sudah merupakan brand wedding organizer profesional dengan digital presence matang.

Ketika owner melihat website, target reaksinya:

"Kalau website Winata seperti ini, brand kami terlihat jauh lebih profesional."

Bukan:

"Oh ini cuma template website wedding."

Karena itu:

- gunakan custom layouts
- editorial composition
- strong typography hierarchy
- polished micro-interactions
- realistic Indonesian wedding copy
- mobile experience yang sangat baik

Prioritaskan visual dan conversion dibanding banyak fitur.

---

# Final Deliverable

Setelah implementasi:

1. Jalankan project.
2. Pastikan tidak ada console error.
3. Pastikan tidak ada Laravel error.
4. Test desktop 1440px.
5. Test tablet.
6. Test mobile 390px.
7. Pastikan seluruh GSAP animation berjalan.
8. Pastikan navigation anchors bekerja.
9. Pastikan WhatsApp CTA bekerja.
10. Pastikan tidak ada horizontal overflow.
11. Pastikan semua placeholder mudah diganti.
12. Buat README singkat berisi:

- cara menjalankan project
- lokasi konfigurasi brand
- cara mengganti nomor WhatsApp
- cara mengganti portfolio
- cara mengganti testimonial
- cara mematikan DEMO_MODE

Jangan berhenti pada skeleton atau wireframe.

Implementasikan homepage sampai menjadi demo website yang benar-benar siap dipresentasikan kepada calon client.
