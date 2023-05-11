<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormKuantitatifController extends Controller
{
    public function index()
    {
        return view('form-kuantitatif');
    }
}
