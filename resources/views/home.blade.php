@extends('layouts.app')

@section('content')
<div class="d-flex flex-column min-vh-100">
    <!-- Konten Utama -->
    <div class="container my-5 flex-grow-1">
        <div class="bg-warning p-5 rounded-3 shadow-lg">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0 text-center text-md-start">
                    <h1 class="display-4 fw-bold">Ruang Digital</h1>
                    <p class="lead mb-4">Software Development and Programming School</p>
                    <a href="/contact" class="btn btn-danger btn-lg">Hubungi Kami</a>
                </div>
                <div class="col-md-6 text-center">
                    <!-- Ikon komputer besar -->
                    <i class="bi bi-laptop" style="font-size: 8rem; color: #343a40;"></i>
                </div>
            </div>
        </div>
    </div>

<bod class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-primary fw-bold mb-3">Kenapa Harus Ruang Digital?</h1>
                <p class="lead text-muted mb-5">Beberapa alasan mengapa kamu harus memilih Ruang Digital Indonesia sebagai mitra belajarmu.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-3 d-inline-flex mb-4">
                            <svg class="bi bi-file-earmark-text text-primary" width="48" height="48" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        </div>
                        <h3 class="card-title h4 mb-3">Materi Terupdate</h3>
                        <p class="card-text text-muted">Dapatkan akses ke materi pembelajaran terkini yang selalu diperbarui sesuai perkembangan industri.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-success bg-opacity-10 p-3 d-inline-flex mb-4">
                            <svg class="bi bi-percent text-success" width="48" height="48" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.442 2.558a.625.625 0 0 1 0 .884l-10 10a.625.625 0 1 1-.884-.884l10-10a.625.625 0 0 1 .884 0zM4.5 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5zm7 6a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm0 1a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                            </svg>
                        </div>
                        <h3 class="card-title h4 mb-3">Harga Terjangkau</h3>
                        <p class="card-text text-muted">Investasi pendidikan berkualitas dengan harga yang ramah di kantong untuk semua kalangan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="rounded-circle bg-warning bg-opacity-10 p-3 d-inline-flex mb-4">
                            <svg class="bi bi-clock text-warning" width="48" height="48" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
                            </svg>
                        </div>
                        <h3 class="card-title h4 mb-3">Jadwal Fleksibel</h3>
                        <p class="card-text text-muted">Belajar dengan kenyamanan waktu Anda sendiri, kapan pun dan di mana pun Anda berada.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Image Section -->
            <div class="col-md-6 text-center">
            <img src="{{ asset('images/image.png') }}" alt="Example Image">

            </div>

            <!-- Text Section -->
            <div class="col-md-6">
                <h1 class="fw-bold">Belajar sesuai kurikulum kuliah dan <span class="text-warning">standar industri global</span></h1>
                <p class="text-muted">Flashsoft Indonesia tersedia bagi kamu yang masih kuliah dan ingin menjadi seorang web developer.</p>
                <a href="#" class="btn btn-danger">Hubungi Kami</a>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h1 class="display-4 fw-bold">
                    <span class="text-primary">Dibimbing oleh mentor yang</span>
                    <span class="text-warning">Profesional</span>
                </h1>
                <p class="lead text-muted mb-4">
                    Sebagai platform edukasi, Flashsoft indonesia bekerja sama dengan mitra yang sudah expert dibidangnya.
                </p>
                <a href="#" class="btn btn-danger btn-lg">Hubungi Kami</a>
            </div>
            <div class="col-md-4 text-center">
                <i class="bi bi-person-video3 text-primary" style="font-size: 5rem;"></i>
            </div>
        </div>
    </div>
    <body class="bg-light">
    <div class="container py-4">
        <h1 class="text-center mb-4 fw-bold text-dark">Pilihan Paket Belajar</h1>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-3">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-3 fw-bold text-dark">Coolyeah</h2>
                        <p class="text-center text-muted">PHP / Java / C / Android / Python / JavaScript</p>
                        <h3 class="text-center text-danger mb-3 fw-bold fs-3">Rp.340.000<small class="text-muted fs-6">/bulan</small></h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Durasi 120 menit</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Reguler Senin - Jumat</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Reguler Pagi/Siang</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Tersedia Non-Reguler</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Free Konsultasi</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Free Komunitas</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Mentor Berpengalaman</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Private Full Belajar</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Instan dan Belajar</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <div class="d-flex justify-content-center">
                           <button class="btn btn-danger btn-lg w-50 rounded fw-bold">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-3">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-3 fw-bold text-dark">Private</h2>
                        <p class="text-center text-muted">PHP / Java / C / Android / Python / JavaScript</p>
                        <h3 class="text-center text-danger mb-3 fw-bold fs-3">Rp.1.150.000<small class="text-muted fs-6">/bulan</small></h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Durasi 120 menit</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Reguler Senin - Jumat</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Reguler Pagi/Siang</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Tersedia Non-Reguler</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Free Konsultasi</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Free Komunitas</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Mentor Berpengalaman</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Private Full Belajar</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Instan dan Belajar</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <div class="d-flex justify-content-center">
                           <button class="btn btn-danger btn-lg w-50 rounded fw-bold">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow border-0 rounded-3">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-3 fw-bold text-dark">Live Coding</h2>
                        <p class="text-center text-muted">PHP / Java / C / Android / Python / JavaScript</p>
                        <h3 class="text-center text-danger mb-3 fw-bold fs-3">Rp.1.550.000<small class="text-muted fs-6">/bulan</small></h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Durasi 120 menit</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Reguler Senin - Jumat</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Reguler Pagi/Siang</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Tersedia Non-Reguler</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Free Konsultasi</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Free Komunitas</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Mentor Berpengalaman</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Private Full Belajar</li>
                            <li class="mb-2"><span class="text-warning me-2 fs-5">&#9733;</span> Instan dan Belajar</li>
                        </ul>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-3">
                        <div class="d-flex justify-content-center">
                           <button class="btn btn-danger btn-lg w-50 rounded fw-bold">Hubungi Kami</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<!-- Footer -->
<footer class="bg-dark text-light pt-4 pb-2 mt-auto"> <!-- Mengurangi padding bawah dengan pb-2 -->
  <div class="container">
    <div class="row">
      <!-- Deskripsi Website -->
      <div class="col-md-4 mb-4">
        <h5>Ruang Digital</h5>
        <p>Kami menyediakan layanan pembuatan website profesional sesuai kebutuhan Anda. Hubungi kami untuk informasi lebih lanjut.</p>
      </div>

      <!-- Kontak dan Sosial Media -->
      <div class="col-md-4 mb-4 text-center">
        <h5>Kontak Kami</h5>
        <p><i class="bi bi-telephone-fill"></i> +62 812 3456 7890</p>
        <p><i class="bi bi-envelope-fill"></i> info@jasapembuatanwebsite.com</p>
      </div>

      <!-- Ikon Sosial Media -->
      <div class="col-md-4 mb-4 text-center">
        <h5>Ikuti Kami</h5>
        <div>
          <a href="#" class="text-light me-3"><i class="bi bi-instagram" style="font-size: 1.5rem;"></i></a>
          <a href="#" class="text-light me-3"><i class="bi bi-telegram" style="font-size: 1.5rem;"></i></a>
          <a href="#" class="text-light me-3"><i class="bi bi-tiktok" style="font-size: 1.5rem;"></i></a>
          <a href="#" class="text-light me-3"><i class="bi bi-twitter" style="font-size: 1.5rem;"></i></a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="row mt-3"> <!-- Mengurangi margin top dengan mt-3 -->
      <div class="col text-center">
        <p class="mb-0">&copy; 2024 Jasa Pembuatan Website. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap JS dan Icons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
@endsection
