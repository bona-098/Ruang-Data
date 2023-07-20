@extends('layout.layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Project</h4>
                <br>
                <div class="table-responsive m-t-40">
                    <table text-align: left; id="myTable"
                        class="table  display table-bordered table-striped"style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Nama Project</th>
                                <th>Witel</th>
                                <th>Progress ML</th>
                                <th>Progress MI</th>
                                <th style="white-space: nowrap;">Nilai Project</th>
                                <th style="white-space: nowrap;">Sudah Akru</th>
                                <th style="white-space: nowrap;">Sisa Belum Akru</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project as $p)
                                <tr>
                                    <td>{{ $p->customer }}</a></td>
                                    <td style="font-size: 12px;"><a href="{{ route('project.show', $p->id) }}"
                                            target="_blank"
                                            style="color: rgb(20, 19, 19); text-decoration: underline;">{{ $p->nama_project }}
                                    </td>
                                    <td>{{ $p->witel }}</td>
                                    <td>{{ $p->progress_ml }}%</td>
                                    <td>{{ $p->progress_mi }}%</td>
                                    <td style="white-space: nowrap; font-size: 12px;">Rp
                                        {{ number_format(floatval($p->nilai_project), 0, ',', '.') }}</td>
                                    <td style="white-space: nowrap; font-size: 12px;">Rp
                                        {{ number_format(floatval($p->sudah_akru), 0, ',', '.') }}</td>
                                    <td style="white-space: nowrap; font-size: 12px;">Rp
                                        {{ number_format(floatval($p->sisa_belum_akru), 0, ',', '.') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
@endsection
