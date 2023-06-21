@extends('template')
@section('content')
    <a href="{{ url('portofolio/add') }}"><button class="btn btn-primary">Tambah Data</button></a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>Nama portofolio</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
      @foreach ($portofolio as $key => $item)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->kategori}}</td>
            <td>{{$item->deskripsi}}</td>
            <td><img src="/storage/{{$item->foto}}" width="150"></td>
            <td>
                <a href="portofolio/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
                <a href="portofolio/edit/{{$item->id}}" class="btn btn-succes btn-sm">edit</a>
            </td>
        </tr>
        @endforeach


    </table>

@endsection
