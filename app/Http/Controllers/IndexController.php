<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
     return view ('dashboard');
    }
    public function jabatan()
    {
    return view ('jabatan');
    }
    public function karyawan()
    {
    return view ('karyawan');
    }
    public function laporan()
    {
    return view ('laporan');
    }
    public function gaji()
    {
    return view ('gaji');
    }
    public function create()
    {
    return view ('create');
    }
}
