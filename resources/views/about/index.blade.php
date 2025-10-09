@extends('layouts.app')

@section('title', 'Tentang Kami - Family Mart Indonesia')

@section('content')
    <!-- Page Header -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold">Tentang Family Mart Indonesia</h1>
                    <p class="lead">Lebih dari sekadar convenience store, kami adalah keluarga</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Overview -->
    <section class="section-padding">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="mb-4 gradient-text">Profil Perusahaan</h2>
                    <p class="text-muted">
                        Family Mart hadir di Indonesia sejak tahun 2004 dengan komitmen untuk menyediakan produk berkualitas 
                        dan pelayanan terbaik bagi keluarga Indonesia. Dengan lebih dari 1.000 gerai di seluruh negeri, 
                        kami terus berinovasi agar setiap pelanggan dapat menikmati pengalaman berbelanja yang nyaman dan menyenangkan.
                    </p>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Pelayanan ramah dan cepat</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Produk segar dan berkualitas</li>
                        <li class="mb-2"><i class="fas fa-check-circle text-family-green me-2"></i>Inovasi berkelanjutan untuk kepuasan pelanggan</li>
                        <li><i class="fas fa-check-circle text-family-green me-2"></i>Kenyamanan bagi seluruh keluarga Indonesia</li>
                    </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                         alt="Family Mart Store" class="img-fluid rounded shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="section-padding bg-family-light-blue">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title gradient-text">Visi & Misi Kami</h2>
                    <p class="text-muted">Menjadi pilihan utama keluarga Indonesia dengan layanan dan produk terbaik</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4" data-aos="fade-right">
                    <div class="card k3-card h-100 text-center">
                        <div class="card-body p-5">
                            <i class="fas fa-eye fa-3x text-family-green mb-3"></i>
                            <h4 class="text-family-blue mb-3">Visi</h4>
                            <p class="text-muted">
                                Menjadi jaringan convenience store terdepan yang menjadi pilihan utama keluarga Indonesia, 
                                dengan komitmen kuat terhadap kualitas, kenyamanan, dan keselamatan kerja.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4" data-aos="fade-left">
                    <div class="card k3-card h-100 text-center">
                        <div class="card-body p-5">
                            <i class="fas fa-bullseye fa-3x text-family-green mb-3"></i>
                            <h4 class="text-family-blue mb-3">Misi</h4>
                            <ul class="list-unstyled text-start mx-auto" style="max-width: 320px;">
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Menyediakan produk berkualitas dan higienis</li>
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Menjaga kenyamanan pelanggan di setiap gerai</li>
                                <li class="mb-2"><i class="fas fa-check text-family-green me-2"></i>Menjaga keselamatan dan kesehatan kerja (K3)</li>
                                <li><i class="fas fa-check text-family-green me-2"></i>Mendukung gaya hidup praktis dan modern</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Core Values -->
    <section class="section-padding">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title gradient-text">Nilai-Nilai Utama</h2>
                    <p class="text-muted">Landasan dalam setiap pelayanan Family Mart</p>
                </div>
            </div>
            <div class="row">
                @php
                    $values = [
                        ['title' => 'Kualitas', 'icon' => 'fas fa-star', 'desc' => 'Memberikan produk terbaik bagi pelanggan.'],
                        ['title' => 'Inovasi', 'icon' => 'fas fa-lightbulb', 'desc' => 'Terus beradaptasi mengikuti kebutuhan zaman.'],
                        ['title' => 'Kenyamanan', 'icon' => 'fas fa-coffee', 'desc' => 'Menciptakan pengalaman berbelanja yang menyenangkan.'],
                        ['title' => 'Keselamatan', 'icon' => 'fas fa-hard-hat', 'desc' => 'Menjaga keselamatan kerja dan pelanggan di setiap gerai.'],
                    ];
                @endphp

                @foreach($values as $value)
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up">
                        <div class="card k3-card h-100 text-center">
                            <div class="card-body p-4">
                                <div class="icon-wrapper mb-3">
                                    <i class="{{ $value['icon'] }} fa-2x text-family-green"></i>
                                </div>
                                <h5 class="card-title text-family-blue">{{ $value['title'] }}</h5>
                                <p class="card-text text-muted">{{ $value['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
