@extends('layout.layout')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                    src="{{ asset('images/calon_bpo/fotomel.jpg') }}" alt="User profile picture"
                                    style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
                            </div>


                            <h3 class="profile-username text-center">Muhammad Nawir</h3>

                            <p class="text-muted text-center">Engineer 2 MEP</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Band Kelas</b> <a class="float-right">VI </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Masa Kerja</b> <a class="float-right">2 Tahun 3 Bulan 20 Hari</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Masa Pensiun</b> <a class="float-right">1-Jan-2039</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Umur</b> <a class="float-right">30 Tahun</a>
                                </li>
                            </ul>

                            {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    {{-- <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fa fa-book"></i> Education</strong>

                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker"></i> Location</strong>

                            <p class="text-muted">Malibu, California</p>

                            <hr>

                            <strong><i class="fa fa-pencil"></i> Skills</strong>

                            <p class="text-muted">
                                <span class="tag tag-danger">UI Design</span>
                                <span class="tag tag-success">Coding</span>
                                <span class="tag tag-info">Javascript</span>
                                <span class="tag tag-warning">PHP</span>
                                <span class="tag tag-primary">Node.js</span>
                            </p>

                            <hr>

                            <strong><i class="fa fa-file"></i> Notes</strong>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum
                                enim neque.</p>
                        </div>
                        <!-- /.card-body -->
                    </div> --}}
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity"
                                        data-toggle="tab">Activity</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Sertifikasi</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card  collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Pribadi</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse"><i class=" fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->

                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">

                                                            <tbody>
                                                                <tr>
                                                                    <td>Tanggal Lahir</td>
                                                                    <td>09 Juli 2000</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Kota Lahir</td>
                                                                    <td>Balikpapan Selatan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jenis Kelamin</td>
                                                                    <td>laki Laki</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alamat</td>
                                                                    <td>Jln mesjid Ar raudah Rt 19 no 30 kel damai bahagia
                                                                        kec balikpapan selatan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Agama</td>
                                                                    <td>Islam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status Nikah</td>
                                                                    <td>Belum Nikah</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Suku</td>
                                                                    <td>Banjar</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Golongan Darah</td>
                                                                    <td>B</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jumlah Anak</td>
                                                                    <td>0</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /# column -->
                                        <div class="col-lg-6">
                                            <div class="card  collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Kepekerjaan</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse"><i class=" fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">

                                                            <tbody>
                                                                <tr>
                                                                    <td>No Pekerja</td>
                                                                    <td>720467 / 720467</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tanggal Bergabung</td>
                                                                    <td>1-Jan-2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Status Kepekerjaan</td>
                                                                    <td>Karyawan Tetap</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Posisi saat ini</td>
                                                                    <td>REGIONAL VI KALIMANTAN</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Fungsi Pekerjaan</td>
                                                                    <td>ENGINEER 1 MANAGE SERVICE & SMART PROPERTY</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Sk Lokasi Kerja</td>
                                                                    <td>DAS/123/HJK</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Lokasi Kerja</td>
                                                                    <td>Balikpapan</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card  collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Pendidikan</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse"><i class=" fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            {{-- <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead> --}}
                                                            <tbody>
                                                                <tr>
                                                                    <td>Jenjang Pendidikan Terakhir</td>
                                                                    <td>S1</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Program Studi</td>
                                                                    <td>Informatika</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Penyelenggara Pendidikan Terakhir</td>
                                                                    <td>Institut Teknologi Kalimantan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ijazah Kelulusan</td>
                                                                    <td>Ijazah</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jenjang Pendidikan Lanjut</td>
                                                                    <td>S2</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Program Studi Lanjut</td>
                                                                    <td>Bio Informatika </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Penyelenggara Pendidikan Lanjut</td>
                                                                    <td>Oxford University</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Surat Keterangan Pendidikan </td>
                                                                    <td>Surat Keterangan Menjalani Pendidikan</td>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="card  collapsed-card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Data</h3>
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse"><i class=" fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            {{-- <thead>
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead> --}}
                                                            <tbody>
                                                                <tr>
                                                                    <td>BPJS Kesehatan</td>
                                                                    <td>2424106833</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>BPJS Ketenagakerjaan</td>
                                                                    <td>94K02576610</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Telkomedika</td>
                                                                    <td>8000329201302340</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>NPWP</td>
                                                                    <td>17.983.786.9-024.000</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <!-- The timeline -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Box Comment -->
                                            <div class="card card-widget">
                                                <div class="card-header">
                                                    <div class="user-block">
                                                        <span><a href="#">Sertifikasi
                                                                Dicoding </a></span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <img class="img-fluid pad"
                                                        src="{{ asset('images/calon_bpo/Sertifikat.jpeg') }}"
                                                        alt="Photo">
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Box Comment -->
                                            <div class="card card-widget">
                                                <div class="card-header">
                                                    <div class="user-block">
                                                        <span><a href="#">Sertifikasi
                                                                Kominfor </a></span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>
                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <img class="img-fluid pad"
                                                        src="{{ asset('images/calon_bpo/Sertifikat2.jpeg') }}"
                                                        alt="Photo">
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <div class="col-md-6">
                                            <!-- Box Comment -->
                                            <div class="card card-widget">
                                                <div class="card-header">
                                                    <div class="user-block">
                                                        <span><a href="#">Sertifikasi
                                                                SanberCode</a></span>
                                                    </div>
                                                    <!-- /.user-block -->
                                                    <div class="card-tools">
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse">
                                                            <i class="fas fa-minus"></i>
                                                        </button>

                                                    </div>
                                                    <!-- /.card-tools -->
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <img class="img-fluid pad"
                                                        src="{{ asset('images/calon_bpo/Sertifikat3.jpeg') }}"
                                                        alt="Photo">
                                                </div>
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience"
                                                class="col-sm-2 col-form-label">Experience</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills"
                                                    placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I agree to the <a href="#">terms
                                                            and
                                                            conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
