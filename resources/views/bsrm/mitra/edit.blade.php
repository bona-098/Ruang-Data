@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit Data Mitra</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('patch')
                            <div class="form-body">
                                <h3 class="box-title m-t-15"></h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" id="firstName" value="{{ $mitra->nama_vendor }}" name="nama_vendor" class="form-control"
                                                placeholder="John doe">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Kategori</label>
                                            <input type="text" id="lastName" name="kategori" value="{{ $mitra->kategori }}"
                                                class="form-control form-control-danger" placeholder="12n">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Domisili</label>
                                            <input type="text" id="lastName" name="domisili" value="{{ $mitra->domisili }}"
                                                class="form-control form-control-danger" placeholder="12n">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Nilai Asses</label>
                                            <input type="number" id="lastName" name="nilai_asses" value="{{ $mitra->nilai_asses }}"
                                                class="form-control form-control-danger" placeholder="12n">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="control-label">Status</label>
                                            <select name="status" value="{{ $mitra->nama_vendor }}" class="form-control custom-select">
                                                <option value="eksisting">eksisting</option>
                                                <option value="register">register</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label"> </label>
                                        <div class="form-group ">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection