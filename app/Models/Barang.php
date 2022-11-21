<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function tipe()
    {
        return $this->belongsTo(Tipes::class);
    }

    public function merk()
    {
        return $this->belongsTo(Merks::class);
    }
}
