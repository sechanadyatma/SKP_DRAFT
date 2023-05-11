@extends('layouts.mainlayout')
@section('title', 'Pegawai')
@section('content')

    <div class="mt-5 col-6 m-auto">
        <form action="/pegawai/{{ $pegawai->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $pegawai -> name }}" required>
        </div>

        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="{{ $pegawai->gender }}">{{ $pegawai->gender }}</option>
                @if ($pegawai->gender == 'Laki-Laki')
                    <option value="Perempuan">Perempuan</option>
                @else
                    <option value="Laki-Laki">Laki-Laki</option>
                @endif
            </select>
        </div>

        <div class="mb-3">
            <label for="nip">NIP</label>
            <input type="text" name = "nip" class="form-control" id="nip" value="{{ $pegawai -> nip }}" required>
        </div>

        <div class="mb-3">
            <label for="class">Golongan</label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="{{ $pegawai->class->id }}">{{ $pegawai->class->name }}</option>
                @foreach ($class as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <div class="mb-3">
            <label for="photo">Gambar</label>
            <div class="input-group">
                <input type="file" name="image" class="form-control" id="image" value="{{ $pegawai -> image }}">
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
</div>
@endsection