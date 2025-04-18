<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class detail_periksa extends Model
{
    protected $fillable = [
        'id_periksa',
        'id_obat',
    ];

    public function periksa()
    {
        return $this->belongsTo(detail_periksa::class, 'id_periksa');
    }

    public function obat()
    {
        return $this->belongsTo(detail_periksa::class, 'id_obat');
    }

    // public function detailPeriksa()
    // {
    //     return $this->hasMany(DetailPeriksa::class, 'id_periksa');
    // }
}
