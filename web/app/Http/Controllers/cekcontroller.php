<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cekcontroller extends Controller
{
    public function status(){
        return view("pages.transaksi.cek");
    }
}
