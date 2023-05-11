@extends('layouts.mainlayout')
@section('title', 'Pegawai')
@section('content')
<h1>Ini halaman Pegawai</h1>

<div class="my-5">
        <a href="/pegawai-add" class="btn btn-primary">Add Data</a>
</div>

@if (Session::has('status'))
<div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
</div>

@endif

<h3>Pegawai List</h3>

<div class="my-3 col-12 col-sm 8 col-md-5">
        <form action="" method="get">
                <div class="input-group mb-3">
                        <input type="text" class="form-control" name="keyword" placeholder="keyword">
                        <button class="input-group-text btn btn-primary">Search</button>
                </div>
        </form>
</div>

<table class="table">
        <thead>
                <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>NIP</th>
                        <th>Gender</th>
                        <th>Class</th>
                        <th>Action</th>
                </tr>
        </thead>
        <tbody>
                @foreach ($pegawaiList as $data)
                <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->nip }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->class['name'] }}</td>
                        <td><a href="pegawai/{{ $data->id }}">detail</a></td>
                        <td><a href="pegawai-edit/{{ $data->id }}">edit</a></td>
                        <td><a href="pegawai-delete/{{ $data->id }}">delete</a></td>
                </tr>
                @endforeach
        </tbody>
</table>
<div class="my-5">
        {{ $pegawaiList->withQueryString()->links () }}
</div>
@endsection