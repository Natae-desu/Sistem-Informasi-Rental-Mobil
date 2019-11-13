<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transaksicontroller extends Controller
{
    //
    public function transaksilist (){
        return view("pages.transaksi.list");
    }
}