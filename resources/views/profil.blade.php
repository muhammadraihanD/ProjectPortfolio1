@extends('template')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <form action="{{ url('profil/create')}}" method="post" enctype="multipart/form-data">
        @csrf
             <div class="row">
                 <div class="container-fluid p-3 ">
                    <div class="col-md-12 mt-5">
                        <form action="">
                            <div class="col-mb-3">
                                <label for="" class="form-label">NIS</label>
                                <input type="text" name="nis" id="nis" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">NAMA</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">NO HP</label>
                                <input type="number" name="no_telp" id="no_telp" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">JENIS KELAMIN</label>
                                <input type="text" name="JK" id="JK" class="form-control" placeholder="Silahkan di isi">
                                {{-- <select name="JK" id="JK" class="form-select">
                                    <option value="">Jenis kelamin</option>
                                    <option value="">laki laki</option>
                                    <option value="">perempuan</option>
                                </select> --}}
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">DESKRIPSI</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="pt-3">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                 </div>
             </div>
    </form>
</body>
</html>
@endsection
