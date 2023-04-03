@extends('layout.layout')
@section('content')
<div class="container-fluid">
    <!-- Start Page Content -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-primary">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Edit Data Karyawan Organik</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="box-title m-t-15"></h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Nik</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="John doe">
                                        {{-- <small class="form-control-feedback"> This is inline help </small> </div> --}}
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                        <small class="form-control-feedback"> This field has error. </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                        <small class="form-control-feedback"> This field has error. </small> </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group has-danger">
                                        <label class="control-label">Last Name</label>
                                        <input type="text" id="lastName" class="form-control form-control-danger" placeholder="12n">
                                        <small class="form-control-feedback"> This field has error. </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group has-success">
                                        <label class="control-label">Gender</label>
                                        <select class="form-control custom-select">
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                        </select>
                                        <small class="form-control-feedback"> Select your gender </small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Date of Birth</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Category</label>
                                        <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1">
                                            <option value="Category 1">Category 1</option>
                                            <option value="Category 2">Category 2</option>
                                            <option value="Category 3">Category 5</option>
                                            <option value="Category 4">Category 4</option>
                                        </select>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
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