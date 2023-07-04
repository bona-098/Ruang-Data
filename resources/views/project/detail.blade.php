@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Laporan Progress Mingguan Rehab Plasa TELKOM REGIONAL VI 2022</h4>
                <button type="button" class=" btn btn-primary " id="dropdownMenuButton" data-toggle="dropdown"><i
                        class="fa fa-cog"></i>
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalUpdateProject"
                        href="#">Update</a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#ModalDeleteProject"
                        href="#">Delete</a>
                </div>
                <div style="margin-top: 20px;">
                    <div class="table-responsive">
                        <table text-align: left; id="myTable" class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Customer</th>
                                    <td>{{ $project->customer }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kode AMPM</th>
                                    <td>{{ $project->id_crm }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Witel</th>
                                    <td>{{ $project->witel }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nama Project</th>
                                    <td>{{ $project->nama_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kategori</th>
                                    <td>{{ $project->kategori }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Skem</th>
                                    <td>{{ $project->skema }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Nilai Project</th>
                                    <td>{{ $project->nilai_project }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sudah Akru</th>
                                    <td>{{ $project->sudah_akru }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Sisa Belum Akru</th>
                                    <td>{{ $project->sisa_belum_akru }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Progres ML</th>
                                    <td>{{ $project->progress_ml }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Progres MI</th>
                                    <td>{{ $project->progress_mi }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Target Deal</th>
                                    <td>{{ $project->target_deal }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td>{{ $project->keterangan }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Start Date</th>
                                    <td>{{ $project->start_date }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">End Date</th>
                                    <td>{{ $project->end_date }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Tahap</th>
                                    <td>{{ $project->tahap }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Akru</th>
                                    <td>{{ $project->akru }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /# column -->
        </div>
        {{-- Selesai --}}
        <!-- /# row -->
    </div>


    <!-- KONTEN MODAL UPDATE Customer  -->


    <div class="modal fade" id="ModalUpdateProject" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Customer</label>
                                            <input type="text" name="customer" id="Unit Kerja"
                                                class="form-control" value="{{ $project->customer }}" required>
                                            <small class="form-control-feedback"> @error('customer')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kode AMPM</label>
                                            <select required name="id_crm" class="form-control">
                                                <option value="nlop" {{ $project->id_crm == 'nlop' ? 'selected' : '' }}>Non Lop</option>
                                                <option value="lop" {{ $project->id_crm == 'lop' ? 'selected' : '' }}>Lop</option>
                                            </select>
                                            <small class="form-control-feedback">
                                                @error('id_crm')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Witel</label>
                                            <select required name="witel" class="form-control">
                                                <option value="Balikpapan" {{ $project->witel == 'Balikpapan' ? 'selected' : '' }}>Balikpapan</option>
                                                <option value="Samarinda" {{ $project->witel == 'Samarinda' ? 'selected' : '' }}>Samarinda</option>
                                                <option value="Kalsel" {{ $project->witel == 'Kalsel' ? 'selected' : '' }}>Kalsel</option>
                                                <option value="Kalbar" {{ $project->witel == 'Kalbar' ? 'selected' : '' }}>Kalbar</option>
                                                <option value="Treg" {{ $project->witel == 'Treg' ? 'selected' : '' }}>Treg</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('witel')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kategori</label>
                                            <select required name="kategori" class="form-control">
                                                <option value="Enterprise" {{ $project->kategori == 'Enterprise' ? 'selected' : '' }}>Enterprise</option>
                                                <option value="Governance" {{ $project->kategori == 'Governance' ? 'selected' : '' }}>Governance</option>
                                                <option value="Telkom" {{ $project->kategori == 'Telkom' ? 'selected' : '' }}>Telkom</option>
                                                <option value="Telkom Group" {{ $project->kategori == 'Telkom Group' ? 'selected' : '' }}>Telkom Group</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('kategori')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Nama Project</label>
                                            <input name="nama_project" value="{{ $project->nama_project }}"
                                                required type="text" id="nama_project" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('nama_project')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Skem</label>
                                            <input name="skema" value="{{ $project->skema }}" required type="text"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('skema')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nilai Project</label>
                                            <input required name="nilai_project" id="nilai_project" min="0"
                                                type="number" value="{{ $project->nilai_project }}" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('nilai_project')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sudah Akru</label>
                                            <input required name="sudah_akru" id="sudah_akru" min="0"
                                                type="number" value="{{ $project->sudah_akru }}" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('sudah_akru')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sisa Belum Akru</label>
                                            <input required name="sisa_belum_akru" id="sisa_belum_akru" min="0"
                                                readonly type="number" value="{{ $project->sisa_belum_akru }}" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('sisa_belum_akru')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Progres Minggu Lalu</label>
                                            <input required name="progress_ml" id="progress_ml" value="{{ $project->progress_ml }}" type="number"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('progress_ml')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Progres Minggu Ini</label>
                                            <input required name="progress_mi" id="progress_mi" value="{{ $project->progress_mi }}" type="number"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('progress_mi')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Target Deal</label>
                                            <input required name="target_deal" value="{{ $project->target_deal }}" type="text"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('target_deal')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                            <input required name="keterangan" value="{{ $project->keterangan }}" type="text"
                                                class="form-control">
                                            <small class="form-control-feedback">
                                                @error('keterangan')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input required name="start_date" value="{{ $project->start_date }}" type="date" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('start_date')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input required name="end_date" value="{{ $project->end_date }}" type="date" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('end_date')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Tahap</label>
                                            <select name="tahap" class="form-control">
                                                <option selected value="{{ $project->tahap }}">{{ $project->tahap }}</option>
                                                <option value="Co-OnHand ">Co-OnHand</option>
                                                <option value="Komersial">Komersial</option>
                                                <option value="OnHand">OnHand</option>
                                            </select>
                                            <small class="form-control-feedback"> @error('tahap')
                                                    {{ $message }}
                                                @enderror </small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Akru</label>
                                            <input required name="akru" value="{{ $project->akru }}" type="date" class="form-control">
                                            <small class="form-control-feedback">
                                                @error('akru')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var inputA = document.getElementById("nilai_project");
        var inputB = document.getElementById("sudah_akru");
        var hasil = document.getElementById("sisa_belum_akru");

        nilai_project.addEventListener("input", hitungPengurangan);
        sudah_akru.addEventListener("input", hitungPengurangan);

        function hitungPengurangan() {
            var a = Number(nilai_project.value);
            var b = Number(sudah_akru.value);
            var c = a - b;
            if (c < 0) {
                hasil.value = "";
                alert("Hasil pengurangan tidak boleh negatif!");
            } else {
                hasil.value = c;
            }
        }
    </script>

    <!-- KONTEN MODAL UPDATE Customer  -->

    {{-- KONTEN MODAL DELETE Customer --}}

    <div class="modal fade" id="ModalDeleteProject" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                </div>
                <div class="modal-body">
                    Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat dikembalikan.
                    Apakah
                    Anda yakin ingin melanjutkan?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">keluar</button>
                    <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- KONTEN MODAL DELETE KARYAWAN --}}
@endsection