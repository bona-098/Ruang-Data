@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">

        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Promosi</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <form method="GET" action="{{ route('rekomendasi.filter') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Posisi Band yang dicari</label>
                                <select class="form-control select2" name="band" style="width: 100%;">
                                    <option value="">Pilih Band</option>
                                    <option value="I"> I</option>
                                    <option value="II"> II</option>
                                    <option value="III">III</option>
                                    <option value="IV">IV</option>
                                    <option value="V">V</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pilih Lama Jabatan Terakhir</label>
                                <select class="form-control select2" name="lama_jabatan" style="width: 100%;">
                                    <option value="">Pilih lama jabatan terakhir</option>
                                    <option value="Kurang 1 Tahun">Kurang 1 Tahun</option>
                                    <option value="Antara 1-2 Tahun">Antara 1-2 Tahun</option>
                                    <option value="Lebih 2 Tahun">Lebih 2 Tahun</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Talent / Assesment</label>
                                <select class="form-control select2" name="talent" style="width: 100%;">
                                    <option value="">Pilih Talent / Assesment</option>
                                    <option value="Talent Review">Talent Review</option>
                                    <option value="Assesment">Assesment</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pilih Lama Talent / Assesment</label>
                                <select class="form-control select2" name="lama_talent" style="width: 100%;">
                                    <option value="">Pilih lama Talent / Assesment</option>
                                    <option value="Kurang 1 Tahun">Kurang 1 Tahun</option>
                                    <option value="Antara 1-2 Tahun">Antara 1-2 Tahun</option>
                                    <option value="Lebih 2 Tahun">Lebih 2 Tahun</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Filter</button>
                        </div>
                    </div>
                </div>
            </form>


        </div>
        {{-- Data Tabel mulai baru --}}
    </div>
@endsection
