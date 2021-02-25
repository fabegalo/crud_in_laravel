<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pacientes;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function inclui()
    {
        return view('crud');
    }

    public function lista()
    {
        return view('lista');
    }
}

