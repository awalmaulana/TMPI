@extends('Layout-Apps.main')

@section('library-css')
    @if ($special_css)
        <link href="{{ asset('custom-assets/css/application/' . $special_css) }}" rel="stylesheet">
    @endif
@endsection

@section('library-js')
    @if ($special_js)
        <script src="{{ asset('custom-assets/js/application/' . $special_js) }}"></script>
    @endif
@endsection


@section('content')

    <!-- BreadTitle -->
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-start mb-0">Assesment</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/assesment">Fase 1 - Persiapan</a>
                            </li>
                            <li class="breadcrumb-item active">Penilaian Kritikalitas
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end BreadTitle -->

    <div class="content-body">
        <!-- Dashboard Starts -->
        <section id="assesment">
            <!-- Striped rows start -->
            <div class="row" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" style="display: inline">
                            <div class="row">
                                <div class="col-3">
                                    <select class="form-select select2" id="select-fase">
                                        <option value="1">FASE 1 - Persiapan</option>
                                        <option value="2">FASE 2 - Respon/Tanggap Insiden Siber</option>
                                        <option value="3">FASE 3 - Tindak Lanjut</option>
                                    </select>
                                </div>
                                <div class="col-3">
                                    <select class="form-select select2" id="select-component">
                                        <option value="1">Penilaian Kritikalitas</option>
                                        <option value="2">Analisis Ancaman</option>
                                        <option value="3">Orang, Proses, Teknologi, dan Informasi</option>
                                        <option value="4">Lingkungan Kontrol</option>
                                        <option value="5">Penilaian Kematangan</option>
                                    </select>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#timeline">
                                        <span>Timeline Pengisian</span>
                                    </button>
                                    <button type="button" class="btn btn-warning">
                                        <span>Simpan Sementara</span>
                                    </button>
                                    <button type="button" class="btn btn-primary" id="type-info">
                                        <span>Selanjutnya</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th></th>
                                        <th>PERTANYAAN</th>
                                        <th style="width: 300px">JAWABAN</th>
                                        <th style="width: 200px">UNGGAH BUKTI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1.1.1</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-info">
                                                <i data-feather="help-circle" style="height: 18px; width: 18px"></i>
                                            </button>
                                        </td>
                                        <td>Apakah organisasi Anda telah mendata aset informasi dan aset teknologi yang
                                            penting bagi organisasi Anda?</td>
                                        <td>
                                            <form id="jquery-val-form" method="post">
                                                <div class="form-check my-50">
                                                    <input type="radio" id="tidak" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="sporadis" name="jawaban"
                                                        class="form-check-input" required />
                                                    <label class="form-check-label" for="sporadis">Sporadis</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="umum" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="umum">Umumnya / Sebagian
                                                        Besar</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="seluruh" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="seluruh">Ya, Seluruhnya</label>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#download">
                                                <i data-feather="download" class="me-25"></i>
                                                <span>Unggah</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1.1.2</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-info">
                                                <i data-feather="help-circle" style="height: 18px; width: 18px"></i>
                                            </button>
                                        </td>
                                        <td>Apakah data aset tersebut sudah diklasifikasikan kritikalitasnya dan
                                            klasifikasinya secara sistematis dan terstruktur?</td>
                                        <td>
                                            <form id="jquery-val-form" method="post">
                                                <div class="form-check my-50">
                                                    <input type="radio" id="tidak" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="sporadis" name="jawaban"
                                                        class="form-check-input" required />
                                                    <label class="form-check-label" for="sporadis">Sporadis</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="umum" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="umum">Umumnya / Sebagian
                                                        Besar</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="seluruh" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="seluruh">Ya, Seluruhnya</label>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-secondary">
                                                <span>evidence.docx</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1.1.3</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-info">
                                                <i data-feather="help-circle" style="height: 18px; width: 18px"></i>
                                            </button>
                                        </td>
                                        <td>Apakah data aset tersebut telah disusun berdasarkan klasifikasi kritikalitas
                                            berbasis analisis bisnis dan aspek strategis organisasi?</td>
                                        <td>
                                            <form id="jquery-val-form" method="post">
                                                <div class="form-check my-50">
                                                    <input type="radio" id="tidak" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="sporadis" name="jawaban"
                                                        class="form-check-input" required />
                                                    <label class="form-check-label" for="sporadis">Sporadis</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="umum" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="umum">Umumnya / Sebagian
                                                        Besar</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="seluruh" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="seluruh">Ya, Seluruhnya</label>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#download">
                                                <i data-feather="download" class="me-25"></i>
                                                <span>Unggah</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1.1.4</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-info">
                                                <i data-feather="help-circle" style="height: 18px; width: 18px"></i>
                                            </button>
                                        </td>
                                        <td>Apakah data aset tersebut telah disusun berdasarkan klasifikasi kritikalitas
                                            berbasis analisis resiko operasional?</td>
                                        <td>
                                            <form id="jquery-val-form" method="post">
                                                <div class="form-check my-50">
                                                    <input type="radio" id="tidak" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="sporadis" name="jawaban"
                                                        class="form-check-input" required />
                                                    <label class="form-check-label" for="sporadis">Sporadis</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="umum" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="umum">Umumnya / Sebagian
                                                        Besar</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="seluruh" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="seluruh">Ya, Seluruhnya</label>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#download">
                                                <i data-feather="download" class="me-25"></i>
                                                <span>Unggah</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1.1.5</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-info">
                                                <i data-feather="help-circle" style="height: 18px; width: 18px"></i>
                                            </button>
                                        </td>
                                        <td>Apakah organisasi Anda telah menetapkan penanggung jawab setiap aset kritikal
                                            tesebut?</td>
                                        <td>
                                            <form id="jquery-val-form" method="post">
                                                <div class="form-check my-50">
                                                    <input type="radio" id="tidak" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="sporadis" name="jawaban"
                                                        class="form-check-input" required />
                                                    <label class="form-check-label" for="sporadis">Sporadis</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="umum" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="umum">Umumnya / Sebagian
                                                        Besar</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="seluruh" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="seluruh">Ya, Seluruhnya</label>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#download">
                                                <i data-feather="download" class="me-25"></i>
                                                <span>Unggah</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1.1.6</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-info">
                                                <i data-feather="help-circle" style="height: 18px; width: 18px"></i>
                                            </button>
                                        </td>
                                        <td>Apakah organisasi Anda telah melakukan penilaian dampak kerugian operasional,
                                            bisnis, dan aspek hukum secara mendalam untuk setiap aset jika terlibat dalam
                                            suatu insiden? </td>
                                        <td>
                                            <form class="needs-validation" novalidate>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="tidak" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="sporadis" name="jawaban"
                                                        class="form-check-input" required />
                                                    <label class="form-check-label" for="sporadis">Sporadis</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="umum" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="umum">Umumnya / Sebagian
                                                        Besar</label>
                                                </div>
                                                <div class="form-check">
                                                    <input type="radio" id="seluruh" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="seluruh">Ya, Seluruhnya</label>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#download">
                                                <i data-feather="download" class="me-25"></i>
                                                <span>Unggah</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fw-bold">1.1.7</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-icon btn-icon rounded-circle btn-info">
                                                <i data-feather="help-circle" style="height: 18px; width: 18px"></i>
                                            </button>
                                        </td>
                                        <td>Apakah dokumen penilaian kerugian tersebut selalu direviu dan diperbarui
                                            periodik?</td>
                                        <td>
                                            <form id="jquery-val-form" method="post">
                                                <div class="form-check my-50">
                                                    <input type="radio" id="tidak" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="tidak">Tidak</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="sporadis" name="jawaban"
                                                        class="form-check-input" required />
                                                    <label class="form-check-label" for="sporadis">Sporadis</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="umum" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="umum">Umumnya / Sebagian
                                                        Besar</label>
                                                </div>
                                                <div class="form-check my-50">
                                                    <input type="radio" id="seluruh" name="jawaban" class="form-check-input"
                                                        required />
                                                    <label class="form-check-label" for="seluruh">Ya, Seluruhnya</label>
                                                </div>
                                            </form>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#download">
                                                <i data-feather="download" class="me-25"></i>
                                                <span>Unggah</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->

        </section>
        <!-- Dashboard ends -->

    </div>

    <!-- Modal Download -->
    <div class="modal fade text-start" id="download" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Upload Dokumen Pertanyaan 1.1.1</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="jquery-val-form" method="post">
                    <div class="modal-body">
                        <div class="mb-1">
                            <label for="customFile" class="form-label">Pilih Dokumen</label>
                            <input class="form-control" type="file" id="customFile" name="customFile" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Kembali</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Timeline Pengisian -->
    <div class="modal fade text-start" id="timeline" tabindex="-1" aria-labelledby="myModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">Timeline Pengisian</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>Belum ada</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

@endsection
