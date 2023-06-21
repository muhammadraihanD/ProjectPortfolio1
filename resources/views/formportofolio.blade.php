
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
    <form action="{{$action}}" method="post" enctype="multipart/form-data">
    {{-- <form action="{{ url('portofolio/create') }}" method="post" enctype="multipart/form-data"> --}}
        @csrf
             <div class="row">
                 <div class="container-fluid p-3 ">
                    <div class="col-md-12 mt-5">
                        <form action="" method="POST">
                            @csrf
                            <div class="col-mb-3">
                                <label for="" class="form-label">NAMA</label>
                                <input type="text" name="nama" id="nama" value="{{$portofolio->nama}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">KATEGORI</label>
                                <input type="text" name="kategori" id="kategori" value="{{$portofolio->kategori}}" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">DESKRIPSI</label>
                                <input type="text" name="deskripsi" id="deskripsi" value="{{$portofolio->deskripsi}}"  class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" value="{{$portofolio->foto}}"  class="form-control" placeholder="Silahkan di isi">
                            </div>

                            <div class="pt-3 ">
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
{{--
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
    <form action="{{ url('portofolio/create')}}" method="post" enctype="multipart/form-data">
        @csrf
             <div class="row">
                 <div class="container-fluid p-3 ">
                    <div class="col-md-12 mt-5">
                        <form action="">
                            <div class="col-mb-3">
                                <label for="" class="form-label">NAMA</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">KATEGORI</label>
                                <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Silahkan di isi">
                            </div>
                            <div class="col-mb-3">
                                <label for="" class="form-label">DESKRIPSI</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Silahkan di isi">
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
@endsection --}}
