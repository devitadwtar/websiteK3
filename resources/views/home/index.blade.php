@extends('layouts.app')

@section('title', 'Family Mart Indonesia - Beranda')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Keselamatan dan Kesehatan Kerja Prioritas Kami</h1>
                    <p class="lead mb-4">Family Mart berkomitmen menciptakan lingkungan kerja yang aman, sehat, dan nyaman bagi seluruh karyawan dan pelanggan dengan standar tertinggi.</p>
                    <a href="{{ route('k3') }}" class="btn btn-light btn-lg me-3">Pelajari K3 Kami</a>
                    <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Tentang Kami</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section-padding bg-family-light-blue">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                    <div class="stat-number">1,000+</div>
                    <p class="text-family-blue fw-semibold">Toko di Seluruh Indonesia</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number">15,000+</div>
                    <p class="text-family-blue fw-semibold">Karyawan Terlatih K3</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number">99.8%</div>
                    <p class="text-family-blue fw-semibold">Kepatuhan Standar K3</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number">50+</div>
                    <p class="text-family-blue fw-semibold">Penghargaan K3 Nasional</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Summary -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4 gradient-text">Tentang Family Mart Indonesia</h2>
                    <p class="text-muted">Sejak hadir di Indonesia pada tahun 2004, Family Mart telah tumbuh menjadi jaringan convenience store terdepan dengan komitmen kuat terhadap Keselamatan dan Kesehatan Kerja (K3).</p>
                    <p class="text-muted">Kami percaya bahwa lingkungan kerja yang aman dan sehat adalah fondasi untuk memberikan pelayanan terbaik kepada pelanggan.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Standar K3 Internasional</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Pelatihan K3 Berkelanjutan</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Audit K3 Rutin</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Program Kesehatan Karyawan</li>
                    </ul>
                    <a href="{{ route('about') }}" class="btn btn-family-green mt-3">Selengkapnya</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Family Mart Store" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- K3 Highlights -->
    <section class="section-padding bg-gradient" style="background: linear-gradient(135deg, var(--family-blue) 0%, var(--family-green) 100%); color: white;">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="display-5 fw-bold mb-3">Komitmen K3 Kami</h2>
                    <p class="lead">Keselamatan dan kesehatan adalah tanggung jawab bersama</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                    <div class="text-center p-4">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-shield-alt fa-3x" style="color: white;"></i>
                        </div>
                        <h4>Proteksi Maksimal</h4>
                        <p>Sistem keamanan dan keselamatan terintegrasi di semua gerai</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-center p-4">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-user-md fa-3x" style="color: white;"></i>
                        </div>
                        <h4>Kesehatan Terjaga</h4>
                        <p>Program kesehatan rutin dan pemeriksaan berkala</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-center p-4">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-graduation-cap fa-3x" style="color: white;"></i>
                        </div>
                        <h4>Pelatihan Berkelanjutan</h4>
                        <p>Pelatihan K3 reguler untuk semua tingkat karyawan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="section-padding bg-family-light-green">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="section-title gradient-text">Berita K3 Terbaru</h2>
                    <p class="text-muted">Update terbaru seputar K3 di Family Mart Indonesia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                    <div class="card k3-card h-100">
                        <img src="https://images.unsplash.com/photo-1581092921461-eab62e97a780?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Pelatihan K3">
                        <div class="card-body">
                            <span class="k3-badge">Pelatihan</span>
                            <h5 class="card-title mt-3 text-family-blue">Pelatihan APAR untuk Seluruh Karyawan</h5>
                            <p class="card-text text-muted">Program pelatihan penggunaan alat pemadam api ringan untuk meningkatkan kesiapsiagaan...</p>
                            <a href="#" class="btn btn-family-green">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card k3-card h-100">
                        <img src="https://cdn.sejutacita.id/dealls-blog-cms/gaji_family_mart_1afba2f041.webp" class="card-img-top" alt="Penghargaan K3">
                        <div class="card-body">
                            <span class="k3-badge">Penghargaan</span>
                            <h5 class="card-title mt-3 text-family-blue">Raih Penghargaan K3 Nasional 2023</h5>
                            <p class="card-text text-muted">Family Mart kembali meraih penghargaan Zero Accident Award dari Kementerian Ketenagakerjaan...</p>
                            <a href="#" class="btn btn-family-green">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card k3-card h-100">
                        <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="Teknologi K3">
                        <div class="card-body">
                            <span class="k3-badge">Inovasi</span>
                            <h5 class="card-title mt-3 text-family-blue">Implementasi Sistem Safety Digital</h5>
                            <p class="card-text text-muted">Penggunaan teknologi IoT untuk monitoring keselamatan kerja real-time di seluruh gerai...</p>
                            <a href="#" class="btn btn-family-green">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection