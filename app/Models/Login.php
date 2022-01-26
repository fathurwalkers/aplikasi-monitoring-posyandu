<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Balita;
use App\Models\Bidan;

class Login extends Model
{
    use HasFactory;
    protected $table = 'login';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function balita()
    {
        return $this->hasMany(Balita::class);
    }

    public function bidan()
    {
        return $this->hasMany(Bidan::class);
    }
}
