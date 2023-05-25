@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit Data performance</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('performance.update', $performance->id) }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="form-body">
                                <h3 class="box-title m-t-15"></h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="control-label">Kategori</label>
                                            <select name="kategori" id="kategori" value="{{ $performance->kategori }}" class="form-control custom-select">
                                                <option value="">Pilih Kategori</option>
                                                <option value="Financial">Financial</option>
                                                <option value="Outlook Q2">Outlook Q2</option>
                                            </select>
                                        </div>
                                    </div>                                    
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Tahun</label>
                                            <input type="text" id="tahun" name="tahun" value="{{ $performance->tahun }}"
                                                class="form-control form-control-danger">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Bulan</label>
                                            <input type="text" id="bulan" name="bulan" value="{{ $performance->bulan }}"
                                            class="form-control form-control-danger">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="value">
                                        <input type="file" name="foto" id="foto">
                                        <div class="label--desc">upload foto ya adik-adik</div>
                                        <a class="card-profile-image mt-4"
                                        href="{{ asset('images/performance/' .$performance->foto) }}" target="_blank">
                                        <img id="prewiev-image" 
                                        src="{{ asset('images/performance/' .$performance->foto) }}" height="120px" width="120px" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
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