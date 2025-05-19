@extends('app')

@section('content')
    <div class="main-background"></div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="ls-4">BANK DATA PPKD</h1>
                <h4 class="w-400 ls-2">INNOVATIVE, DELIVERED, EFFECTIVE, ACCOUNTABLE</h4>
            </div>
        </div>
        <div class="row my-5 bg-light px-5 py-5 rounded-4 shadow-sm">   
            <div class="col-12 text-center">
                <div class="input-group w-100">
                    <input type="text" class="form-control border-custom" placeholder="Cari Berdasarkan Kata Kunci">
                    <span class="input-group-text bg-white border-custom">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </div>
            <div class="col-12 text-center mt-4">
                <p>atau jelajah berdasarkan topik</p>
            </div>
            <div class="row">
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2" alt="Ekonomi"
                            style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Ekonomi</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a href="{{ route('topik') }}" class="text-black mb-0 me-2">Anggaran Pemerintah</a>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Statistik Ekonomi</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">UKM dan Kewirausahaan</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Harga</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Statistik Ekonomi</a>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2" alt="Ekonomi"
                            style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Good Governance</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Akuntabilitas Pemerintah</a>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2" class="mb-0 me-2">Pengendalian Korupsi</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Desa</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Infrastruktur Publik</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Kepercayaan dan Demokrasi</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <a class="text-black mb-0 me-2">Transparasi</a>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2" alt="Ekonomi"
                            style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Industri, Bisnis dan Kewirausahaan</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Pariwisata</p>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">UKM dan Kewirausahaan</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Perdagangan</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Infrastruktur</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Aksesibillitas</p>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Pengelolaan Sampah</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Jalan</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Lingkungan dan Perubahan Iklim</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Risiko Bencana</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Kebijakan</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Pangan</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Kesehatan</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Kualitas Layanan Kesehatan</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Ketenagakerjaan</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Perlindungan Kerja</p>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Indikator Pengangguran</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Indikator Ketenagakerjaan</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Lingkungan dan Perubahan Iklim</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Usaha dan Iklim</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Masyarakat</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Kesejahteraan</p>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Pemberdayaan dan Kerukunan</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Kesetaraan Gender</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Kesejahteraan</p>
                    </div>
                </div>
                <div class="col-4 mt-4 mb-2">
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('icons/ekonomi.svg') }}" class="icon-image-title img-fluid me-2"
                            alt="Ekonomi" style="width: 40px;">
                        <h5 class="mb-0 fw-bold">Pendidikan dan Keterampilan</h5>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Capaian Pendidikan</p>
                    </div>
                    <div class="d-flex align-items-center mb-1">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Siswa</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('icons/arrow.svg') }}" alt="Arrow" class="icon-image img-fluid me-2">
                        <p class="mb-0 me-2">Pasar Tenaga Kerja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    @push('scripts')
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    @endpush
@endsection
