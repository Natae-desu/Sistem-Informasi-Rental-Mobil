<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form1Controller extends Controller
{
    //
    public function form1list(){
        return view("pages.laporanpemakaian.laporan1");
    }
}
