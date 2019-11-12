<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporan2Controller extends Controller
{
    //
    public function laporan2list(){
        return view("pages.laporanpemakaian.list");
    }
}
