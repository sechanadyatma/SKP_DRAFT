@extends('layouts.mainlayout')
@section('title', 'Pegawai')
@section('content')

    <h2>Detail Pegawai</h2>

    <div class="my-3">
        @if ($pegawai->image != '')
            <img src="{{ asset('storage/photo/'.$pegawai->image) }}" alt=""
            width="200px">
        @else
            <img src="{{ asset('image/Default_Image.png'.$pegawai->image) }}" alt=""
            width="200px">
        @endif
    </div>
    <div class="mt-5">
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>NIP</th>
            <th>Gender</th>
            <th>Golongan</th>
        </tr>
        <tr>
            <td>{{ $pegawai->name }}</td>
            <td>{{ $pegawai->nip }}</td>
            <td>{{ $pegawai->gender }}</td>
            <td>{{ $pegawai->class->name }}</td>
        </tr>
    </table>
    </div>
    <style>
        th {
            width: 25%;
        }
    </style>
    <div>
        <a href ="/pegawai" class="btn btn-primary">Kembali</a href>
    </div>
@endsection