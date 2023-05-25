@extends('layout.layout')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-70">

                    <div class="card  ">
                        <div class="card-body ">
                            <a href="{{ asset('template/images/data_financial_maret.jpeg') }}" target="_blank"
                                style="display: block; max-width: 100%; border: 2px solid black; box-shadow: 0 0 5px black;">
                                <img src="{{ asset('template/images/data_financial_maret.jpeg') }}"
                                    class="col-sm-12 col-md-70" alt="Gambar" class="img-fluid">
                            </a>
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <div class="col-sm-5 col-sm-offset-3">
                                        <label for="path">Path Gambar</label>
                                        <input type="image" class="form-control" name="path" id="path"
                                            value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="image">Upload Gambar</label>
                                    <input type="file" class="form-control-file" name="image" id="image"
                                        accept="image/*">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>

                            <br>
                            <form action="" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->

    </section>
@endsection