@extends('layouts.mainlayout')
@section('title', 'Pegawai')
@section('content')

    <div class="mt-5">
        <h2>Apakah anda yakin ingin menghapus data : {{ $pegawai->name }} {{ $pegawai->nip }}</h2>

        <form style="display: inline-block" action="/pegawai-destroy/{{ $pegawai->id }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <a href ="/pegawai" class="btn btn-primary">Cancel</a href>
    </div>
@endsection