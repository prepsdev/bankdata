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
                    <h4 class="tc-primary mb-0 me-2 ls-2">Filter Data</h4>
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
                            2020
                        </button>
                    </div>
                </div>

                <!-- Province: Sumatera Utara -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-sumut">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-sumut">
                            2021
                        </button>
                    </div>
                </div>

                <!-- Province: Sumatera Barat -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-sumbar">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-sumbar">
                            2022
                        </button>
                    </div>
                </div>

                <!-- Province: Sumatera Selatan -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-sumsel">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-sumsel">
                            2023
                        </button>
                    </div>
                </div>

                <!-- Province: Bengkulu -->
                <div class="mb-3">
                    <div class="d-flex align-items-center">
                        <input class="form-check-input me-2" type="checkbox" id="check-bengkulu">
                        <button class="btn btn-link text-dark text-decoration-none p-0" data-bs-toggle="collapse"
                            data-bs-target="#prov-bengkulu">
                            2024
                        </button>
                    </div>
                </div>

                <button type="button" class="btn btn-custom-primary w-100">Terapkan Filter</button>

            </div>
            <div class="col-1">

            </div>
            <div class="col-8">
                <div class="mb-0">
                    <ul class="nav nav-tabs d-flex" style="width: 100%;">
                        <li class="nav-item" style="flex: 1;">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-overview">
                                <img src="{{ asset('icons/overview.svg') }}"
                                    class="icon-image-title-big img-fluid"><br><small>Overview</small>
                            </button>
                        </li>
                        <li class="nav-item" style="flex: 1;">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-tabel">
                                <img src="{{ asset('icons/tabel.svg') }}"
                                    class="icon-image-title-big img-fluid"><br><small>Tabel</small>
                            </button>
                        </li>
                        <li class="nav-item" style="flex: 1;">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-grafik">
                                <img src="{{ asset('icons/grafik.svg') }}"
                                    class="icon-image-title-big img-fluid"><br><small>Grafik</small>
                            </button>
                        </li>
                        <li class="nav-item" style="flex: 1;">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-unduh">
                                <img src="{{ asset('icons/download.svg') }}"
                                    class="icon-image-title-big img-fluid"><br><small>Unduh</small>
                            </button>
                        </li>
                        <li class="nav-item" style="flex: 1;">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-unduh">
                                <img src="{{ asset('icons/overview.svg') }}"
                                    class="icon-image-title-big img-fluid"><br><small>Hasil Analisa</small>
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content">
                    <!-- Overview Tab Content -->
                    <div class="tab-pane fade show active" id="tab-overview">
                        <div>
                            <hr class="light-hr">
                            <h4 class="tc-primary mb-0 me-2 ls-2">Tingkat Pendapatan Perkapita</h4>
                            <p class="mt-2 text-justify">
                                Produk Domestik Regional Bruto (PDRB) merupakan salah satu perangkat data ekonomi yang dapat
                                digunakan untuk mengevaluasi kinerja pembangunan ekonomi suatu wilayah. PDRB dapat juga
                                dimanfaatkan
                                sebagai dasar pengembangan model-model ekonomi dalam rangka menyusun formulasi kebijakan,
                                tingkat
                                percepatan uang yang beredar (velocity of money), pendalaman sektor keuangan (financial
                                deepening),
                                penetapan pajak, kajian ekspor serta impor, dan sebagainya. Dalam publikasi ini ditampilkan
                                PDRB
                                Pengeluaran yang dihitung dengan pendekatan pengeluaran (expenditure approach).
                            </p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="mt-2">
                                    <p class="mb-1"><strong>Sumber:</strong> Data BPS</p>
                                    <p class="mb-0"><strong>Terakhir Update:</strong> 21 Maret 2025</p>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Data Tab Content -->
                    <div class="tab-pane fade" id="tab-tabel">
                        <div>
                            <hr class="light-hr">
                            <div class="container py-4">
                                <table id="dataTable" class="table table-bordered w-100">
                                    <thead class="custom-thead">
                                        <tr>
                                            <th rowspan="2" class="text-center bg-primary">Nama Daerah</th>
                                            <th colspan="3" class="text-center bg-primary">Pendapatan Perkapita</th>
                                        </tr>
                                        <tr>
                                            <th class="text-center bg-primary">2021</th>
                                            <th class="text-center bg-primary">2022</th>
                                            <th class="text-center bg-primary">2023</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Provinsi Aceh</td>
                                            <td>Rp. {{ number_format(70000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(8230000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6945000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sumatera Utara</td>
                                            <td>Rp. {{ number_format(61000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7920000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7123000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sumatera Barat</td>
                                            <td>Rp. {{ number_format(58000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6700000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6450000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Riau</td>
                                            <td>Rp. {{ number_format(75000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(8200000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7900000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Kepulauan Riau</td>
                                            <td>Rp. {{ number_format(42000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5050000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4890000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Jambi</td>
                                            <td>Rp. {{ number_format(53000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6400000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6180000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Bengkulu</td>
                                            <td>Rp. {{ number_format(35000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4300000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4200000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sumatera Selatan</td>
                                            <td>Rp. {{ number_format(67000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7750000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7300000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Lampung</td>
                                            <td>Rp. {{ number_format(60000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6800000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6550000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi DKI Jakarta</td>
                                            <td>Rp. {{ number_format(150000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(20000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(18500000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Banten</td>
                                            <td>Rp. {{ number_format(71000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(8650000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(8120000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Jawa Barat</td>
                                            <td>Rp. {{ number_format(140000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(17500000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(16000000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Jawa Tengah</td>
                                            <td>Rp. {{ number_format(135000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(16200000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(15500000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi DI Yogyakarta</td>
                                            <td>Rp. {{ number_format(50000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6200000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5900000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Jawa Timur</td>
                                            <td>Rp. {{ number_format(138000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(16900000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(16200000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Bali</td>
                                            <td>Rp. {{ number_format(60000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7500000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7200000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Nusa Tenggara Barat</td>
                                            <td>Rp. {{ number_format(45000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5700000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5400000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Nusa Tenggara Timur</td>
                                            <td>Rp. {{ number_format(42000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4900000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4600000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Kalimantan Barat</td>
                                            <td>Rp. {{ number_format(56000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6400000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6100000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Kalimantan Tengah</td>
                                            <td>Rp. {{ number_format(52000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6200000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5900000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Kalimantan Selatan</td>
                                            <td>Rp. {{ number_format(58000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(7000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6800000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Kalimantan Timur</td>
                                            <td>Rp. {{ number_format(82000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(9500000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(9100000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Kalimantan Utara</td>
                                            <td>Rp. {{ number_format(35000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4200000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4000000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sulawesi Utara</td>
                                            <td>Rp. {{ number_format(47000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5500000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5300000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Gorontalo</td>
                                            <td>Rp. {{ number_format(30000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3900000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3750000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sulawesi Tengah</td>
                                            <td>Rp. {{ number_format(52000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(6100000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5800000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sulawesi Selatan</td>
                                            <td>Rp. {{ number_format(70000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(8400000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(8000000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sulawesi Tenggara</td>
                                            <td>Rp. {{ number_format(45000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5200000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5000000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Sulawesi Barat</td>
                                            <td>Rp. {{ number_format(32000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3850000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Maluku</td>
                                            <td>Rp. {{ number_format(43000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4900000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4700000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Maluku Utara</td>
                                            <td>Rp. {{ number_format(40000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4700000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4550000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Papua</td>
                                            <td>Rp. {{ number_format(78000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(9500000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(9200000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Papua Barat</td>
                                            <td>Rp. {{ number_format(46000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(5100000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4950000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Papua Tengah</td>
                                            <td>Rp. {{ number_format(35000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(4050000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3900000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Papua Pegunungan</td>
                                            <td>Rp. {{ number_format(30000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3600000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3450000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Papua Selatan</td>
                                            <td>Rp. {{ number_format(31000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3700000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3550000000, 0, '.', '.') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Provinsi Papua Barat Daya</td>
                                            <td>Rp. {{ number_format(32000000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3800000000, 0, '.', '.') }}</td>
                                            <td>Rp. {{ number_format(3600000000, 0, '.', '.') }}</td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Statistik Tab Content -->
                    <div class="tab-pane fade" id="tab-grafik">
                        <div>
                            <hr class="light-hr">
                            <p class="mt-2 text-justify">
                                Coming Soon!
                            </p>
                        </div>
                    </div>

                    <!-- Download Tab Content -->
                    <div class="tab-pane fade" id="tab-unduh">
                        <div class="text-center">
                            <hr class="light-hr">
                            <p class="mt-2">
                                Silahkan Klik Button Download untuk mengunduh data dalam format Excel.
                            </p>
                            <button type="button" class="btn btn-custom-primary">Download</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#dataTable').DataTable({
                    responsive: true,
                    columnDefs: [{
                        orderable: false,
                        targets: 0
                    }],
                    paging: false,
                    info: false,
                    pageLength: 50
                });
            });
        </script>
    @endpush
@endsection
