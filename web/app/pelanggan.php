<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    //
    protected $table="pelanggans";
    protected $fillable = ['nama','jenis kelamin','telepon','email'];
}
