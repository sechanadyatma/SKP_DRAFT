@extends('layouts.mainlayout')
@section('title', 'Home')
@section('content')
        <h1>Ini halaman Home</h1>
        <h2>Selamat datang,{{ Auth::user()->name }} . Role Anda adalah {{ Auth::user()->role->name }} </h2>
        <div>
                <a href="/form" class="btn btn-primary">Isi SKP</a>
                <a href="/evaluasi" class="btn btn-danger">Evaluasi SKP</a>
        </div>
        
@endsection