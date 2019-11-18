<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusmobilController extends Controller
{
    //
    public function statusmobillist(){
        return view("pages.statuspmobil.list");
    }
}
