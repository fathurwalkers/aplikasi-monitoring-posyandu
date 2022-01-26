<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Login;

class Bidan extends Model
{
    use HasFactory;
    protected $table = "bidan";
    protected $primaryKey = "id";
    protected $guarded = [];

    public function login()
    {
        return $this->belongsTo(Login::class);
    }
}
