@extends('layouts.mainlayout')
@section('title', 'Add New Pegawai')
@section('content')
    <div class="mt-5 col-6 m-auto">

        @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="pegawai" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" >
            </div>

            <div class="mb-3">
                <label for="nip">NIP</label>
                <input type="text" name = "nip" class="form-control" id="nip" >
            </div>

            <div class="mb-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" >
                    <option value="">Select One</option>
                    <option value="Laki-Laki">L</option>
                    <option value="Perempuan">P</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="class">Golongan</label>
                <select name="class_id" id="class" class="form-control" >
                    <option value="">Select One</option>
                    @foreach ($class as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="photo">Photo</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="photo" name="photo">
                  </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>

            <div class="mb-3">
                <a href="/pegawai" class="btn btn-primary">Kembali</a>
            </div>
        </form>
    </div>

@endsection