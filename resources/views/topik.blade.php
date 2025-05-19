@extends('app')

@section('content')
    <div class="container-fluid py-3 title-ribbon" style="background-color: #21414f;">
        <div class="d-flex justify-content-between align-items-center flex-wrap"
            style="margin-left: 75px; margin-right: 75px;">
            <div class="d-flex align-items-center" style="height: 100%;">
                <h1 class="ls-4 tc-light mb-0">BANK DATA PPKD</h1>
            </div>

            <div style="width: 100%; max-width: 450px;">
                <div class="input-group w-100">
                    <input type="text" class="form-control border-custom" placeholder="Cari Berdasarkan Kata Kunci">
                    <span class="input-group-text bg-white border-custom">
                        <i class="bi bi-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <h4 class="tc-primary mb-0 me-2 ls-2">Filter Pencarian</h4>
                    <img src="{{ asset('icons/filter.svg') }}" class="icon-image-title img-fluid" alt="Filter Icon"
                        style="width: 24px;">
                </div>
                <hr>
                <!-- Province: Aceh -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-aceh">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-aceh">
                            ▶ Aceh
                        </button>
                    </div>
                    <div id="prov-aceh" class="collapse mt-2 ms-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-aceh1"><label
                                class="form-check-label" for="kab-aceh1">Kab. Aceh Besar</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-aceh2"><label
                                class="form-check-label" for="kab-aceh2">Kab. Aceh Barat</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-aceh3"><label
                                class="form-check-label" for="kab-aceh3">Kab. Pidie</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-aceh4"><label
                                class="form-check-label" for="kab-aceh4">Kota Banda Aceh</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-aceh5"><label
                                class="form-check-label" for="kab-aceh5">Kota Lhokseumawe</label></div>
                    </div>
                </div>

                <!-- Province: Sumatera Utara -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-sumut">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-sumut">
                            ▶ Sumatera Utara
                        </button>
                    </div>
                    <div id="prov-sumut" class="collapse mt-2 ms-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumut1"><label
                                class="form-check-label" for="kab-sumut1">Kab. Deli Serdang</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumut2"><label
                                class="form-check-label" for="kab-sumut2">Kab. Langkat</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumut3"><label
                                class="form-check-label" for="kab-sumut3">Kab. Tapanuli Utara</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumut4"><label
                                class="form-check-label" for="kab-sumut4">Kota Medan</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumut5"><label
                                class="form-check-label" for="kab-sumut5">Kota Binjai</label></div>
                    </div>
                </div>

                <!-- Province: Sumatera Barat -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-sumbar">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-sumbar">
                            ▶ Sumatera Barat
                        </button>
                    </div>
                    <div id="prov-sumbar" class="collapse mt-2 ms-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumbar1"><label
                                class="form-check-label" for="kab-sumbar1">Kab. Agam</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumbar2"><label
                                class="form-check-label" for="kab-sumbar2">Kab. Lima Puluh Kota</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumbar3"><label
                                class="form-check-label" for="kab-sumbar3">Kab. Tanah Datar</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumbar4"><label
                                class="form-check-label" for="kab-sumbar4">Kota Padang</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumbar5"><label
                                class="form-check-label" for="kab-sumbar5">Kota Bukittinggi</label></div>
                    </div>
                </div>

                <!-- Province: Sumatera Selatan -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-sumsel">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-sumsel">
                            ▶ Sumatera Selatan
                        </button>
                    </div>
                    <div id="prov-sumsel" class="collapse mt-2 ms-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumsel1"><label
                                class="form-check-label" for="kab-sumsel1">Kab. Musi Banyuasin</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumsel2"><label
                                class="form-check-label" for="kab-sumsel2">Kab. Banyuasin</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumsel3"><label
                                class="form-check-label" for="kab-sumsel3">Kab. Ogan Ilir</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumsel4"><label
                                class="form-check-label" for="kab-sumsel4">Kota Palembang</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="kab-sumsel5"><label
                                class="form-check-label" for="kab-sumsel5">Kota Lubuklinggau</label></div>
                    </div>
                </div>

                <!-- Province: Bengkulu -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-bengkulu">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-bengkulu">
                            ▶ Bengkulu
                        </button>
                    </div>
                    <div id="prov-bengkulu" class="collapse mt-2 ms-4">
                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                id="kab-bengkulu1"><label class="form-check-label" for="kab-bengkulu1">Kab. Rejang
                                Lebong</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                id="kab-bengkulu2"><label class="form-check-label" for="kab-bengkulu2">Kab.
                                Seluma</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                id="kab-bengkulu3"><label class="form-check-label" for="kab-bengkulu3">Kab. Kaur</label>
                        </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                id="kab-bengkulu4"><label class="form-check-label" for="kab-bengkulu4">Kota
                                Bengkulu</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"
                                id="kab-bengkulu5"><label class="form-check-label" for="kab-bengkulu5">Kab.
                                Mukomuko</label></div>
                    </div>
                </div>

                <button type="button" class="btn btn-custom-primary w-100">Terapkan Filter</button>

            </div>
            <div class="col-1">

            </div>
            <div class="col-8">
                <div class="mb-4">
                    <h1 class="tc-primary mb-0 me-2 ls-4 fw-bold">Anggaran Pemerintah</h1>
                </div>
                <div class="">
                    <hr>
                    <h4 class="tc-primary mb-0 me-2 ls-2">Tingkat Pendapatan Perkapita</h4>
                    <p class="mt-2 text-justify"> Produk Domestik Regional Bruto (PDRB) merupakan salah satu perangkat data
                        ekonomi yang dapat digunakan untuk mengevaluasi kinerja pembangunan ekonomi suatu wilayah. PDRB
                        dapat juga dimanfaatkan sebagai dasar pengembangan model-model ekonomi dalam rangka menyusun
                        formulasi kebijakan, tingkat percepatan uang yang beredar (velocity of money), pendalaman sektor
                        keuangan (financial deepening), penetapan pajak, kajian ekspor serta impor, dan sebagainya. Dalam
                        publikasi ini ditampilkan PDRB Pengeluaran yang dihitung dengan pendekatan pengeluaran (expenditure
                        approach).
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="mt-2">
                            <p class="mb-1"><strong>Sumber:</strong> Data BPS</p>
                            <p class="mb-0"><strong>Terakhir Update:</strong> 21 Maret 2025</p>
                        </span>
                        <a href="{{ route('data') }}" type="button" class="btn btn-custom-primary mt-2">Selengkapnya</a>
                    </div>
                </div>

                <div class="">
                    <hr>
                    <h4 class="tc-primary mb-0 me-2 ls-2">Tingkat Pendapatan Perkapita</h4>
                    <p class="mt-2 text-justify"> Produk Domestik Regional Bruto (PDRB) merupakan salah satu perangkat data
                        ekonomi yang dapat digunakan untuk mengevaluasi kinerja pembangunan ekonomi suatu wilayah. PDRB
                        dapat juga dimanfaatkan sebagai dasar pengembangan model-model ekonomi dalam rangka menyusun
                        formulasi kebijakan, tingkat percepatan uang yang beredar (velocity of money), pendalaman sektor
                        keuangan (financial deepening), penetapan pajak, kajian ekspor serta impor, dan sebagainya. Dalam
                        publikasi ini ditampilkan PDRB Pengeluaran yang dihitung dengan pendekatan pengeluaran (expenditure
                        approach).
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="mt-2">
                            <p class="mb-1"><strong>Sumber:</strong> Data BPS</p>
                            <p class="mb-0"><strong>Terakhir Update:</strong> 21 Maret 2025</p>
                        </span>
                        <button type="button" class="btn btn-custom-primary mt-2">Selengkapnya</button>
                    </div>
                </div>

                <div class="">
                    <hr>
                    <h4 class="tc-primary mb-0 me-2 ls-2">Tingkat Pendapatan Perkapita</h4>
                    <p class="mt-2 text-justify"> Produk Domestik Regional Bruto (PDRB) merupakan salah satu perangkat data
                        ekonomi yang dapat digunakan untuk mengevaluasi kinerja pembangunan ekonomi suatu wilayah. PDRB
                        dapat juga dimanfaatkan sebagai dasar pengembangan model-model ekonomi dalam rangka menyusun
                        formulasi kebijakan, tingkat percepatan uang yang beredar (velocity of money), pendalaman sektor
                        keuangan (financial deepening), penetapan pajak, kajian ekspor serta impor, dan sebagainya. Dalam
                        publikasi ini ditampilkan PDRB Pengeluaran yang dihitung dengan pendekatan pengeluaran (expenditure
                        approach).
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <span class="mt-2">
                            <p class="mb-1"><strong>Sumber:</strong> Data BPS</p>
                            <p class="mb-0"><strong>Terakhir Update:</strong> 21 Maret 2025</p>
                        </span>
                        <button type="button" class="btn btn-custom-primary mt-2">Selengkapnya</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
