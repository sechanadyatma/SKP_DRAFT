<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormEvalController extends Controller
{
    public function index()
    {
        return view('form-eval');
    }
}
