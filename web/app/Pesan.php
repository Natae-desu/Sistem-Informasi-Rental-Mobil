<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    //
    protected $table="tblpesan";

    protected $fillable = ['pelanggan_id','mobil_id','supir_id','ambil','deadline','kembali','status'];

    protected $dates = ['ambil','deadline','kembali'];

    public function pelanggan()
    {
        return $this->belongsTo('App\pelanggan');
    }
    public function mobil()
    {
        return $this->belongsTo('App\Mobil');
    }
    public function supir()
    {
        return $this->belongsTo('App\supir');
    }

    
}
