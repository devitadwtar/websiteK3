@extends('layouts.app')

@section('title', 'Pertolongan Pertama pada Kecelakaan (P3K) - Family Mart Indonesia')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative text-white py-5" 
        style="background: url('https://images.unsplash.com/photo-1603398938378-e54eab4466e1?auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;">
        <div class="overlay position-absolute w-100 h-100"
            style="background: linear-gradient(135deg, rgba(0,123,255,0.85), rgba(25,135,84,0.85)); top:0; left:0;">
        </div>
        <div class="container position-relative text-center">
            <h1 class="display-4 fw-bold">Pertolongan Pertama pada Kecelakaan (P3K)</h1>
            <p class="lead">Panduan tindakan cepat dan tepat di berbagai area kerja FamilyMart</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section-padding bg-light">
        <div class="container">
            <div class="row g-4">

                <!-- AREA: DAPUR -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body">
                            <h5 class="fw-bold text-success text-center mb-3">Kitchen / Dapur</h5>
                            <table class="table table-bordered small">
                                <tr>
                                    <th class="bg-success text-white text-center">Aspek</th>
                                    <th class="bg-success text-white text-center">Keterangan</th>
                                </tr>
                                <tr>
                                    <td>Jenis Cedera & Kecelakaan Khas</td>
                                    <td>
                                        <ul>
                                            <li>Luka bakar: kontak dengan minyak panas, uap, atau alat masak.</li>
                                            <li>Luka sayat: terkena pisau, cutter, atau pecahan kaca.</li>
                                            <li>Tersedak: makanan atau cairan tersangkut di tenggorokan.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pertolongan Pertama & Teknik Tepat</td>
                                    <td>
                                        <ul>
                                            <li>Luka bakar minor: aliri air suhu kamar 10–20 menit, tutup dengan balutan steril.</li>
                                            <li>Luka sayat: tekan dengan kasa steril, beri antiseptik, dan balut.</li>
                                            <li>Tersedak: lakukan manuver Heimlich.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penanganan Darurat & Pencegahan Risiko Lanjutan</td>
                                    <td>
                                        <ul>
                                            <li>Luka bakar luas: jangan lepaskan pakaian yang menempel, segera panggil bantuan medis.</li>
                                            <li>Pendarahan hebat: tinggikan area cedera sambil tekan kuat.</li>
                                            <li>Tersedak: pastikan korban bernapas normal.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- AREA: KASIR -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body">
                            <h5 class="fw-bold text-success text-center mb-3">Kasir & Pelayanan</h5>
                            <table class="table table-bordered small">
                                <tr>
                                    <th class="bg-success text-white text-center">Aspek</th>
                                    <th class="bg-success text-white text-center">Keterangan</th>
                                </tr>
                                <tr>
                                    <td>Jenis Cedera & Kecelakaan Khas</td>
                                    <td>
                                        <ul>
                                            <li>Keseleo/strain pada pergelangan tangan, punggung, atau kaki.</li>
                                            <li>Pingsan akibat kelelahan atau shock ringan.</li>
                                            <li>Luka sayat kecil akibat kertas struk atau ujung kardus.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pertolongan Pertama & Teknik Tepat</td>
                                    <td>
                                        <ul>
                                            <li>Keseleo ringan: gunakan prinsip R.I.C.E. (Rest, Ice, Compression, Elevation).</li>
                                            <li>Pingsan: baringkan terlentang, tinggikan kaki 20–30 cm, longgarkan pakaian.</li>
                                            <li>Luka minor: cuci, beri antiseptik, dan tutup dengan plester cepat.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penanganan Darurat & Pencegahan Risiko Lanjutan</td>
                                    <td>
                                        <ul>
                                            <li>Keseleo: anjurkan peregangan ringan dan postur kerja ergonomis.</li>
                                            <li>Pingsan: jaga kehangatan korban, rujuk medis jika tidak siuman dalam 1 menit.</li>
                                            <li>Luka minor: pastikan alat tajam disimpan dengan aman.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- AREA: GUDANG -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body">
                            <h5 class="fw-bold text-success text-center mb-3">Gudang</h5>
                            <table class="table table-bordered small">
                                <tr>
                                    <th class="bg-success text-white text-center">Aspek</th>
                                    <th class="bg-success text-white text-center">Keterangan</th>
                                </tr>
                                <tr>
                                    <td>Jenis Cedera & Kecelakaan Khas</td>
                                    <td>
                                        <ul>
                                            <li>Patah tulang akibat jatuh atau benturan keras.</li>
                                            <li>Strain/terkilir punggung karena salah angkat beban.</li>
                                            <li>Gegar otak atau benturan kepala.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pertolongan Pertama & Teknik Tepat</td>
                                    <td>
                                        <ul>
                                            <li>Patah tulang: imobilisasi area cedera dengan bidai, jangan diluruskan.</li>
                                            <li>Strain punggung: istirahatkan korban, kompres dingin.</li>
                                            <li>Benturan kepala ringan: kompres dingin dan pantau tanda serius.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penanganan Darurat & Pencegahan Risiko Lanjutan</td>
                                    <td>
                                        <ul>
                                            <li>Patah tulang berat / crush injury: panggil bantuan medis, pantau sirkulasi.</li>
                                            <li>Strain: gunakan teknik angkat beban yang benar.</li>
                                            <li>Gegar otak: rujuk medis cepat bila ada perubahan kesadaran.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- AREA: CLEANING SERVICE -->
                <div class="col-lg-6">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body">
                            <h5 class="fw-bold text-success text-center mb-3">Cleaning Service</h5>
                            <table class="table table-bordered small">
                                <tr>
                                    <th class="bg-success text-white text-center">Aspek</th>
                                    <th class="bg-success text-white text-center">Keterangan</th>
                                </tr>
                                <tr>
                                    <td>Jenis Cedera & Kecelakaan Khas</td>
                                    <td>
                                        <ul>
                                            <li>Iritasi kulit atau mata akibat cairan pembersih.</li>
                                            <li>Keracunan inhalasi akibat uap bahan kimia.</li>
                                            <li>Luka tusuk atau sayat dari pecahan kaca atau benda tajam.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pertolongan Pertama & Teknik Tepat</td>
                                    <td>
                                        <ul>
                                            <li>Iritasi kimia: bilas terus-menerus dengan air mengalir 15–20 menit.</li>
                                            <li>Inhalasi: pindahkan korban ke udara segar, longgarkan pakaian.</li>
                                            <li>Luka tusuk: jangan cabut benda, stabilkan dan balut sekelilingnya.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Penanganan Darurat & Pencegahan Risiko Lanjutan</td>
                                    <td>
                                        <ul>
                                            <li>Iritasi mata: tutup mata dengan kasa steril, segera rujuk medis.</li>
                                            <li>Gagal napas: lakukan RJP dan panggil bantuan darurat.</li>
                                            <li>Luka tusuk: gunakan sarung tangan tebal saat buang benda tajam.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Tombol Kembali -->
            <div class="text-center mt-5">
                <a href="{{ route('k3') }}" class="btn btn-family-green px-4 py-2 shadow-lg">
                    <i class="fas fa-arrow-left me-2"></i> Kembali ke Halaman Utama K3
                </a>
            </div>
        </div>
    </section>
@endsection
