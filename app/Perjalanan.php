<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = "perjalanan";
    protected $fillable = ['id','tanggal','jam','lokasi','suhutubuh','user_id'];

    public function User() {
        return $this->belongsTo('App\User','user_id','id');
    }
}