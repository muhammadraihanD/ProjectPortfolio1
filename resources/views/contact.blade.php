@extends('template')
@section('content')
    <a href="{{ url('contact/add') }}"><button>Tambah</button></a>
    <table class="table">
        <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>email</th>
            <th>pesan</th>
            <th>no_telp</th>
            <th>Aksi</th>
        </tr>
        @foreach ($kontaks as $key => $item)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->pesan }}</td>
            <td>{{ $item->No_telp }}</td>
            {{-- <td><img src="/storage/{{$item->foto}}" width="150" ></td> --}}
            <td>
                <a href="contact/hapus/{{$item->id}}" class="btn btn-danger btn-sm">hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
