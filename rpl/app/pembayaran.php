<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembayaran extends Model
{
    //
    protected $primaryKey = "id";
    
    protected $fillable = [
        'bulan','total','bukti','status','id_user',
    ];
}
