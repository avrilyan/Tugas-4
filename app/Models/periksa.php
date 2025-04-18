<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class periksa extends Model
{
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tgl_periksa',
        'catatan',
        'biaya_periksa',
    ];

    public function Pasien()
    {
        return $this->belongsTo(periksa::class, 'id_pasien');
    }

    public function Dokter()
    {
        return $this->belongsTo(periksa::class, 'id_dokter');
    }

    // public function detailPeriksa()
    // {
    //     return $this->hasMany(DetailPeriksa::class, 'id_periksa');
    // }

}
