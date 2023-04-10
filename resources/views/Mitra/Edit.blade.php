@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-outline-primary">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white">Edit Data Mitra</h4>
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="form-body">
                                <h3 class="box-title m-t-15"></h3>
                                <hr>
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Nama</label>
                                            <input type="text" id="firstName" name="nama_vendor" class="form-control"
                                                placeholder="John doe">
                                            {{-- <small class="form-control-feedback"> This is inline help </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Kategori</label>
                                            <input type="text" id="lastName" name="kategori"
                                                class="form-control form-control-danger" placeholder="12n">
                                            <small class="form-control-feedback"> This field has error. </small>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Domisili</label>
                                            <input type="text" id="lastName" name="domisili"
                                                class="form-control form-control-danger" placeholder="12n">
                                            {{-- <small class="form-control-feedback"> This field has error. </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group has-danger">
                                            <label class="control-label">Nilai Asses</label>
                                            <input type="number" id="lastName" name="nilai_asses"
                                                class="form-control form-control-danger" placeholder="12n">
                                            {{-- <small class="form-control-feedback"> This field has error. </small> --}}
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label class="control-label">Status</label>
                                            <select name="status" class="form-control custom-select">
                                                <option value="eksisting">eksisting</option>
                                                <option value="register">register</option>
                                            </select>
                                            {{-- <small class="form-control-feedback"> Select your gender </small> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="control-label"> </label>
                                        <div class="form-group ">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                       
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                               
                                <!--/row-->
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <!-- Row -->
    </div>
@endsection
