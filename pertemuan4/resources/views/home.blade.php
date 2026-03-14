@extends('theme.ui')

@section('container')
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Selamat Datang di Kampus</h1>
            <p class="col-md-8 fs-5">
                Menjadi pusat pendidikan teknologi unggulan dengan semangat inovasi dan kolaborasi.
            </p>
            <a href="/kampus" class="btn btn-primary btn-lg">Pelajari Lebih Lanjut</a>
        </div>
    </div>

    <div class="row mb-5 align-items-center">
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&w=800&q=80" 
                 alt="Kampus" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold">Tentang Kampus Kami</h2>
            <p>
                Kampus adalah institusi pendidikan tinggi berbasis teknologi yang bertujuan mencetak lulusan profesional dan berdaya saing global. 
                Dilengkapi dengan fasilitas modern, lingkungan belajar kolaboratif, dan dosen berpengalaman.
            </p>
            <a href="/kampus" class="btn btn-outline-secondary">Lihat Profil Kampus</a>
        </div>
    </div>

    <div class="text-center mb-4">
        <h2 class="fw-bold">Fasilitas dan Keunggulan</h2>
        <p class="text-muted">Mendukung proses belajar mengajar yang maksimal</p>
    </div>
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Laboratorium Modern</h5>
                    <p class="card-text">Dilengkapi peralatan canggih untuk mendukung praktik mahasiswa.</p>
                </div>
            </div>
        </div>
        </div>
@endsection