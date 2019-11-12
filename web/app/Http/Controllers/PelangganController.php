<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pelanggan;

class PelangganController extends Controller
{
    //
    public function show($id)
    {
        $data = pelanggans::find($id);
        return view("pages.pelanggan.form",compact("data"));
    }
}
