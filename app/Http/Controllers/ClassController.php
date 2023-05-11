<?php

namespace App\Http\Controllers;

use App\Models\ClassGol;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        //lazy load
        // $class = ClassGol::all();//cara request data => ketika dibutuhkan ambil data
        //select *  from table class
        //select * from pegawai where class = ESELON III
        //select * from pegawai where class = ESELON IV
        //select * from pegawai where class = PELAKSANA


        //eager load
        $class = ClassGol::with('pegawai')->get();//
        //select * from table class
        //select * from student where class in (Eselon III, Eselon IV, Pelaksana)
        return view('golongan', ['golList' => $class]);
    }
    public function create()
    {
        $class = ClassGol::select('id','name');
        return view('golongan-add', ['class' => $class]);
    }
    public function store(Request $request)
    {
        dd($request->all());
        // $classgol=ClassGol::create($request->all());
    }
}
