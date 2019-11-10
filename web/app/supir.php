<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supir extends Model
{
    //
    protected $table="tblsupir";
    protected $fillable = ['nama','alamat','telepon','email'];
}
