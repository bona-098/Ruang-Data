{{-- DONE --}}
@extends('layout.layout')
@section('content')
    <div class="container-fluid">
       
        <div class="card">
            <div class="card-body">
                <form action="" method="GET" id="form_1">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="filter1">Nama Area:</label>
                            <select name="nama_area" class="form-control" onchange="updateWitelOptions(this.value)">
                                <option value="">Semua Area</option>
                                <option value="Balikpapan">Balikpapan</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="filter2">Nama Witel:</label>
                            <select id="filter2" name="nama_witel" class="form-control">
                                <option value="">Semua Witel</option>
                            </select>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"></label>
                            <button type="submit" class="form-control btn-success"><i class="fa fa-filter"></i> Filter</button>
                        </div>
                        <div class="col-md-2" style="padding-top: 5px;">
                            <label for="filter5"></label>
                            <button type="button" class="form-control btn-success">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <script>
            function updateWitelOptions(area) {
                const witelSelect = document.getElementById('filter2');
                witelSelect.innerHTML = '';
        
                const optionAll = document.createElement('option');
                optionAll.value = '';
                optionAll.text = 'Semua Witel';
                witelSelect.add(optionAll);
        
                if (area === '') {
                    const option1 = document.createElement('option');
                    option1.value = 'WITEL BALIKPAPAN';
                    option1.text = 'WITEL BALIKPAPAN';
                    witelSelect.add(option1);
        
                    const option2 = document.createElement('option');
                    option2.value = 'WITEL KALTIM';
                    option2.text = 'WITEL KALTIM';
                    witelSelect.add(option2);
        
                    const option3 = document.createElement('option');
                    option3.value = 'WITEL KALTARA';
                    option3.text = 'WITEL KALTARA';
                    witelSelect.add(option3);
        
                    const option4 = document.createElement('option');
                    option4.value = 'WITEL KALSEL';
                    option4.text = 'WITEL KALSEL';
                    witelSelect.add(option4);
        
                    const option5 = document.createElement('option');
                    option5.value = 'WITEL KALTENG';
                    option5.text = 'WITEL KALTENG';
                    witelSelect.add(option5);
        
                    const option6 = document.createElement('option');
                    option6.value = 'WITEL KALBAR';
                    option6.text = 'WITEL KALBAR';
                    witelSelect.add(option6);
                } else if (area === 'Balikpapan') {
                    const option1 = document.createElement('option');
                    option1.value = 'WITEL BALIKPAPAN';
                    option1.text = 'WITEL BALIKPAPAN';
                    witelSelect.add(option1);
                } else if (area === 'Kalimantan Timur') {
                    const option2 = document.createElement('option');
                    option2.value = 'WITEL KALTIM';
                    option2.text = 'WITEL KALTIM';
                    witelSelect.add(option2);
        
                    const option3 = document.createElement('option');
                    option3.value = 'WITEL KALTARA';
                    option3.text = 'WITEL KALTARA';
                    witelSelect.add(option3);
                } else if (area === 'Kalimantan Selatan') {
                    const option4 = document.createElement('option');
                    option4.value = 'WITEL KALSEL';
                    option4.text = 'WITEL KALSEL';
                    witelSelect.add(option4);
        
                    const option5 = document.createElement('option');
                    option5.value = 'WITEL KALTENG';
                    option5.text = 'WITEL KALTENG';
                    witelSelect.add(option5);
                } else if (area === 'Kalimantan Barat') {
                    const option6 = document.createElement('option');
                    option6.value = 'WITEL KALBAR';
                    option6.text = 'WITEL KALBAR';
                    witelSelect.add(option6);
                }
            }
        </script>
        
        
        {{-- Akhir Filter Tabel --}}
        {{-- Data Tabel mulai baru --}}
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data personil</h4>
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTambahPetugas">
                    <i class="fa fa-user-plus"></i> Tambah personil
                </button>
                <a button type="button" class="btn btn-primary" href="/import-personil"><i
                    class="fa fa-plus"></i> Import Data Personil</button> </a>
                <table text-align: left; id="myTable"
                    class=" table table-responsive display table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th style="white-space: nowrap;">Nama</th>
                            <th style="white-space: nowrap;">Area</th>
                            <th style="white-space: nowrap;">Witel</th>
                            <th style="white-space: nowrap;">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personil as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-cog"></i> Aksi
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" data-toggle="modal"
                                                data-target="#ModalUpdatepetugas{{ $p->id }}">
                                                <i class="fa fa-edit"></i> Edit
                                            </a>
                                            <a class="dropdown-item" data-toggle="modal"
                                                data-target="#ModalDeletepetugas{{ $p->id }}">
                                                <i class="fa fa-trash"></i> Hapus
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td style="white-space: nowrap;">{{ $p->nama }}</td>
                                <td style="white-space: nowrap;">{{ $p->area }}</td>
                                <td style="white-space: nowrap;">{{ $p->witel }}</td>
                                <td style="white-space: nowrap;">{{ $p->jabatan }}</td>
                            </tr>
                            <div class="modal fade" id="ModalUpdatepetugas{{ $p->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Personil</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Form Update Personil -->
                                            <form action="{{ route('personil.update', $p->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        name="nama" placeholder="Masukkan nama"
                                                        value="{{ $p->nama }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="area">Area</label>
                                                    <input type="text" class="form-control" id="area"
                                                        name="area" placeholder="Masukkan area"
                                                        value="{{ $p->area }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="witel">Witel</label>
                                                    <input type="text" class="form-control" id="witel"
                                                        name="witel" placeholder="Masukkan witel"
                                                        value="{{ $p->witel }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jabatan">Jabatan</label>
                                                    <input type="text" class="form-control" id="jabatan"
                                                        name="jabatan" 
                                                        value=" $p->jabatan">
                                                </div>
                                                {{-- <div class="form-group">
                                                    <label for="gedung_id">Gedung</label>
                                                    <select class="form-control" id="gedung_id" name="gedung_id">
                                                        @foreach($gedungOptions as $gedung)
                                                            <option value="{{ $gedung->id }}" {{ $p->gedung_id == $gedung->id ? 'selected' : '' }}>
                                                                {{ $gedung->nama_gedung }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>                                                 --}}
                                                <!-- Tambahkan input lainnya sesuai kebutuhan -->
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                            <!-- Form Update Personil -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Delete Mitra -->
    @foreach ($personil as $m)
        @if (isset($m))
            <div class="modal fade" id="ModalDeletepetugas{{ $m->id }}" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                        </div>
                        <div class="modal-body">
                            Tindakan ini akan menghapus data tersebut dan data yang dihapus tidak dapat dikembalikan. Apakah
                            Anda yakin ingin melanjutkan?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <form method="POST" action="{{ route('personil.destroy', $m->id) }}" id="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

    <!-- KONTEN MODAL Tambah Petugas  -->
    <div class="modal fade" id="ModalTambahPetugas" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-backdrop="static" data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Petugas</h5>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action="{{ route('personil.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Nama Petugas</label>
                                            <input required type="text" name="nama" class="form-control">
                                            <small class="form-control-feedback">@error('nama') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Area</label>
                                            <input required type="text" name="area" class="form-control">
                                            <small class="form-control-feedback">@error('area') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Witel</label>
                                            <input required type="text" name="witel" class="form-control">
                                            <small class="form-control-feedback">@error('witel') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Jabatan</label>
                                            <input required type="text" name="jabatan" class="form-control">
                                            <small class="form-control-feedback">@error('jabatan') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Kontrak</label>
                                            <input required type="text" name="kontrak" class="form-control">
                                            <small class="form-control-feedback">@error('kontrak') {{ $message }} @enderror</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gedung_id">Gedung</label>
                                            <select required class="form-control" id="gedung_id" name="gedung_id">
                                                @foreach($gedungOptions as $gedung)
                                                    <option value="{{ $gedung->id }}" {{ $gedung->gedung_id == $gedung->id ? 'selected' : '' }}>
                                                        {{ $gedung->nama_gedung }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <small class="form-control-feedback">@error('gedung_id') {{ $message }} @enderror</small>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
