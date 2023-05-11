@extends('layouts.mainlayout')
@section('title', 'Golongan')
@section('content')
        <h1>Ini halaman Golongan</h1>
        <h3>Golongan List</h3>
        <div class="my-5">
            <a href="/golongan-add" class="btn btn-primary">Add Data</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Pangkat/Gol</th>
                    <td>Pegawai</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($golList as $data)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            @foreach ($data->pegawai as $pegawai)
                               - {{ $pegawai['name'] }} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection