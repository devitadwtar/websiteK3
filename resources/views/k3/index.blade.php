@extends('layouts.app')

@section('title', 'K3 & Keamanan - Family Mart Indonesia')

@section('content')
    <!-- Page Header -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Keselamatan & Kesehatan Kerja</h1>
                    <p class="lead">Komitmen kami dalam menciptakan lingkungan kerja yang aman dan sehat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- K3 Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4 gradient-text">Kebijakan K3 Family Mart</h2>
                    <p class="text-muted">Keselamatan dan Kesehatan Kerja (K3) merupakan bagian integral dari budaya perusahaan Family Mart. Kami berkomitmen untuk:</p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Mencegah kecelakaan kerja dan penyakit akibat kerja</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Mematuhi semua peraturan perundangan K3</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Menyediakan sumber daya yang memadai untuk K3</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Melibatkan seluruh karyawan dalam program K3</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Terus meningkatkan sistem manajemen K3</li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="K3 System" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- K3 Programs -->
    <section class="section-padding bg-family-light-blue">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title gradient-text">Program K3 Unggulan</h2>
                    <p class="text-muted">Berbagai inisiatif untuk meningkatkan keselamatan dan kesehatan kerja</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                    <div class="card k3-card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-fire-extinguisher fa-2x text-family-green"></i>
                            </div>
                            <h5 class="card-title text-family-blue">Keselamatan Kebakaran</h5>
                            <p class="card-text text-muted">Program pencegahan dan penanggulangan kebakaran dengan sistem deteksi dini</p>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Inspeksi APAR bulanan</li>
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Simulasi kebakaran triwulan</li>
                                <li><i class="fas fa-check text-family-green me-2"></i>Sistem alarm terintegrasi</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card k3-card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-hand-holding-medical fa-2x text-family-green"></i>
                            </div>
                            <h5 class="card-title text-family-blue">Kesehatan Kerja</h5>
                            <p class="card-text text-muted">Program pemeriksaan kesehatan berkala dan konseling untuk karyawan</p>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Medical check-up tahunan</li>
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Klinik kesehatan internal</li>
                                <li><i class="fas fa-check text-family-green me-2"></i>Program ergonomi workstation</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card k3-card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="icon-wrapper mb-3">
                                <i class="fas fa-shield-virus fa-2x text-family-green"></i>
                            </div>
                            <h5 class="card-title text-family-blue">Keamanan & Proteksi</h5>
                            <p class="card-text text-muted">Sistem keamanan komprehensif untuk melindungi karyawan dan aset</p>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>CCTV 24 jam</li>
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Security terlatih</li>
                                <li><i class="fas fa-check text-family-green me-2"></i>Prosedur emergency</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- K3 Statistics -->
    <section class="section-padding" style="background: linear-gradient(135deg, var(--family-blue) 0%, var(--family-green) 100%); color: white;">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in">
                    <div class="display-4 fw-bold">99.8%</div>
                    <p>Kepatuhan Standar K3</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="display-4 fw-bold">15,000+</div>
                    <p>Karyawan Tersertifikasi K3</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="display-4 fw-bold">0.02</div>
                    <p>Frequency Rate Kecelakaan</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="display-4 fw-bold">50+</div>
                    <p>Penghargaan K3 Nasional</p>
                </div>
            </div>
        </div>
    </section>
@endsection