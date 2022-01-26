<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Balita;
use App\Models\Bulan;

class Imunisasi extends Model
{
    use HasFactory;
    protected $table = 'imunisasi';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function balita()
    {
        return $this->belongsTo(Balita::class);
    }

    public function bulan()
    {
        return $this->belongsTo(Bulan::class);
    }
}
