<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Imunisasi;

class Bulan extends Model
{
    use HasFactory;
    protected $table = "bulan";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }
}
