<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('Admin.Petugas.Index');
    }

    public function create()
    {
        return view('Admin.Petugas.create');
    }

    public function store(Request $request)
    {

    }

    public function edit($id_petugas)
    {
        return view('Admin.Petugas.edit');
    }
}
