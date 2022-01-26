<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Login;
use App\Models\Imunisasi;


class Balita extends Model
{
    use HasFactory;
    protected $table = "balita";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function login()
    {
        return $this->belongsTo(Login::class);
    }

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class);
    }
}
