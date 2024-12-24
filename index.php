<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kevin Daus</title>
  <style>
    body {
      font-family: "Roboto", sans-serif;
      margin: 0;
      padding: 0;
      color: #e0e0e0;
      background: linear-gradient(135deg, #0f0f0f, #1a1a2e);
      overflow-x: hidden;
    }

    .container {
      max-width: 900px;
      margin: 20px auto;
      padding: 20px;
      background: #1a1a2e;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
      border-radius: 10px;
      overflow: hidden;
    }

    h1, h2, h3 {
      color: #21e6c1;
    }

    .header {
      text-align: center;
      padding-bottom: 20px;
      border-bottom: 2px solid #21e6c1;
    }

    .header p {
      margin: 10px 0;
      font-size: 1.1rem;
    }

    .header h1 {
      animation: pulse 2s infinite;
    }

    .section {
      margin: 30px 0;
    }

    .section h2 {
      border-left: 4px solid #21e6c1;
      padding-left: 10px;
    }

    ul {
      padding-left: 20px;
    }

    ul li {
      margin-bottom: 10px;
      line-height: 1.6;
      position: relative;
    }

    ul li::before {
      content: '';
      position: absolute;
      left: -10px;
      top: 10px;
      width: 6px;
      height: 6px;
      background: #21e6c1;
      border-radius: 50%;
    }

    .footer {
      text-align: center;
      margin-top: 40px;
      border-top: 2px solid #21e6c1;
      padding-top: 20px;
    }

    .footer p {
      font-size: 0.9rem;
    }

    /* Animasi */
    @keyframes pulse {
      0%, 100% {
        transform: scale(1);
        color: #21e6c1;
      }
      50% {
        transform: scale(1.1);
        color: #28f9d0;
      }
    }

    .glow-text {
      text-shadow: 0 0 5px #21e6c1, 0 0 10px #28f9d0, 0 0 20px #21e6c1;
    }

    .floating-card {
      position: relative;
      animation: floating 4s infinite;
    }

    @keyframes floating {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-10px);
      }
    }
  </style>
</head>
<body>
  <div class="container floating-card">
    <div class="header">
      <h1 class="glow-text">KEVIN DAUS</h1>
      <p>0889-7372-9887 • kevinndaus@gmail.com</p>
    </div>
    
    <div class="section">
      <h2>TENTANG SAYA</h2>
      <p>Saya seorang IT Programmer dengan pengalaman dalam bidang pengembangan perangkat lunak dan teknologi informasi. Memiliki latar belakang yang kuat dalam pemrograman dan manajemen sistem, saya ahli dalam merancang dan mengembangkan aplikasi yang memenuhi kebutuhan teknis serta mendukung strategi bisnis.</p>
    </div>

    <div class="section">
      <h2>PENGALAMAN</h2>
      <h3>IT Programmer, PT. Hadin Metavisi Akademika</h3>
      <p>Jan 2024 - Sekarang</p>
      <ul>
        <li>Mengembangkan aplikasi baru sesuai spesifikasi.</li>
        <li>Memelihara aplikasi yang sudah ada untuk memperbaiki bug, meningkatkan performa, atau menambahkan fitur baru.</li>
        <li>Memastikan aplikasi aman dari ancaman siber.</li>
        <li>Sukses merancang API yang dapat menghubungkan aplikasi dengan sistem lainnya secara efisien dan aman.</li>
        <li>Menguji aplikasi untuk memastikan semua fungsionalitas berjalan dengan baik.</li>
        <li>Mengikuti tren teknologi terbaru untuk memberikan solusi yang lebih baik.</li>
      </ul>

      <h3>Internship IT Programmer, PT. Hadin Metavisi Akademika</h3>
      <p>Dec 2023 - Feb 2024</p>

      <h3>Internship IT Support, PT. Olam Indonesia</h3>
      <p>May 2021 - Dec 2021</p>
      <ul>
        <li>Menyelesaikan masalah yang berkaitan dengan koneksi jaringan yang terputus atau tidak stabil, baik Wi-Fi atau LAN.</li>
        <li>Mencocokkan data jumlah dan jenis produk pertanian dari petani dengan yang diterima di ruang penyimpanan sebelum dikirim atau dijual.</li>
      </ul>
    </div>

    <div class="section">
      <h2>PENDIDIKAN</h2>
      <h3>Universitas Terbuka</h3>
      <p>Sistem Informasi • Aug 2024 - Sekarang</p>
      <h3>SMK Kartika XXI Makassar</h3>
      <p>Rekayasa Perangkat Lunak • May 2020 - June 2023</p>
    </div>

    <div class="section">
      <h2>KETERAMPILAN</h2>
      <ul>
        <li>Pengalaman menggunakan alat version control seperti Git dan platform seperti GitHub atau GitLab.</li>
        <li>Pemahaman dalam memilih dan menggunakan database relasional dan non-relasional untuk menyimpan data secara efisien dan mengelola query untuk mengambil informasi.</li>
        <li>Kemampuan untuk mengembangkan API (RESTful APIs) dan berintegrasi dengan sistem lain atau antarmuka klien.</li>
        <li>Kemampuan berkomunikasi dengan baik.</li>
      </ul>
    </div>

    <div class="footer">
      <p>&copy; 2024 Kevin Daus</p>
    </div>
  </div>
</body>
</html>
