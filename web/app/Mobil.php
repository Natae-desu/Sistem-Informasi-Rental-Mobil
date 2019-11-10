<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    //
    protected $table="tblmobil";

    protected $fillable = ['merek','type','tahun','bbm','harga'];
}
