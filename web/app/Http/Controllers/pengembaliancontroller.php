<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengembaliancontroller extends Controller
{
        public function pengembalianmobil(){ 
            return view("pages.pengembalianmobil.list");
        }
}
