<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use App\Models\Login;
use App\Models\Balita;
use App\Models\Bidan;
use App\Models\Jadwal;
use App\Models\Imunisasi;
use App\Models\Bulan;

class CatatanImunisasi extends Controller
{
    public function catatan_imunisasi()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.catatan-imunisasi', [
            'users' => $users
        ]);
    }
}
