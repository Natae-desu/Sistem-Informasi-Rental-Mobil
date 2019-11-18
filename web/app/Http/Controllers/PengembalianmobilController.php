<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianmobilController extends Controller
{
    //
    public function pengembalianmobil1(){
        return view("pages.pengembalianmobil.form");
    }
}
