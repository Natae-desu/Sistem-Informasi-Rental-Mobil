<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporan1Controller extends Controller
{
    //
    public function laporan1list(){
        return view("pages.laporanpemesanan.list");
    }
}
