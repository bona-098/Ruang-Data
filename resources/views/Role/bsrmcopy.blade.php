@extends('layout.layout')
@section('content')
    <!-- End Bread crumb -->
   
    <!-- Container fluid  -->
    <div class="container-fluid">
        {{-- Sweetalert --}}
        <div class="row">
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-bar-chart-o f-s-40 color-primary"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>568120</h2>
                            <a href="https://www.youtube.com/watch?v=6_UhNE5qVX4">
                                <p class="m-b-0">Perfomance</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-handshake-o f-s-40 color-success"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>1178</h2>
                            <p class="m-b-0">Mitra</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-users f-s-40 color-warning"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>25</h2>
                            <p class="m-b-0">Karyawan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <span><i class="fa fa-users f-s-40 color-danger"></i></span>
                        </div>
                        <div class="media-body media-text-right">
                            <h2>847</h2>
                            <p class="m-b-0">Customer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    {{-- Data Tabel mulai baru --}}
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Karyawan</h4>
            {{-- <h6 class="card-subtitle">Data table example</h6> --}}
            <div class="table-responsive ">
                <table text-align: left; id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Action</th>
                            <th>Name</th>
                            <th>Nik</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Start date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button  class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="fa fa-cog"></i>
                                        action
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#myModal"
                                            href="#">Detail</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#myModal"
                                            href="#">Update</a>
                                        <a class="dropdown-item" data-toggle="modal" data-target="#myModal"
                                            href="#">Delete</a>
                                    </div>
                                </div>
                            </td>
                            <td>1Fajriansyah</td>
                            <td> 111182027 </td>
                            <td> Myth </td>
                            <td>RBOC </td>
                            <td>22 </td>
                            <td> 13 Maret 2023 </td>
                            <td> 13 Maret 2023asa </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown"><i
                                            class="fa fa-cog"></i>
                                        <span class="caret">action</span></button>
                                    <ul class="dropdown-menu">
                                        <li><button class="btn btn-success btn sweet-prompt">Sweet Prompt</button></li>
                                        <li><a href="#">Updatsss</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>2Fajriansyah</td>
                            <td> 111182027 </td>
                            <td> Myth </td>
                            <td>RBOC </td>
                            <td>22 </td>
                            <td> 13 Maret 2023 </td>
                            <td> 13 Maret 2023 </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button"
                                        data-toggle="dropdown"><i class="fa fa-cog"></i>
                                        <span class="caret">action</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Detail</a></li>
                                        <li><a href="#">Update</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>3Fajriansyah</td>
                            <td> 111182027 </td>
                            <td> Myth </td>
                            <td> RBOC </td>
                            <td> 22 </td>
                            <td> 13 Maret 2023 </td>
                            <td> 13 Maret 2023 </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button"
                                        data-toggle="dropdown"><i class="fa fa-cog"></i>
                                        <span class="caret">action</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Detail</a></li>
                                        <li><a href="#">Update</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>4Fajriansyah</td>
                            <td> 111182027 </td>
                            <td> Myth </td>
                            <td>RBOC </td>
                            <td>22 </td>
                            <td> 13 Maret 2023 </td>
                            <td> 13 Maret 2023 </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-success dropdown-toggle" type="button"
                                        data-toggle="dropdown"><i class="fa fa-cog"></i>
                                        <span class="caret">action</span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Detail</a></li>
                                        <li><a href="#">Update</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>5Bona matanri</td>
                            <td> 1111820111 </td>
                            <td> Elite </td>
                            <td>RBOC </td>
                            <td>22 </td>
                            <td> 13 Maret 2023 </td>
                            <td> 13dadMaret 2023 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- Selesai --}}
   
    <!-- /# row -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Modal Title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    Modal content goes here.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection




