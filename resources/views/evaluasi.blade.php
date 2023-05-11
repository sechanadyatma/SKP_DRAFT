@extends('layouts.mainlayout')
@section('title', 'Home')
@section('content')
        <h1>Ini halaman Home</h1>
        <h2>Selamat datang,{{ Auth::user()->name }} . Role Anda adalah {{ Auth::user()->role->name }} </h2>
        <div>
                <a href="/form-kuantitatif" class="btn btn-danger">NILAI EVALUASI KUANTITATIF SKP</a>
                <a href="/form-eval" class="btn btn-primary">NILAI DOKUMEN EVALUASI</a>
        </div>
        
@endsection