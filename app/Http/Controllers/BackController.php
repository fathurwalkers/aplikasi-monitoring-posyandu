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

class BackController extends Controller
{
    public function index()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.index', [
            'users' => $users
        ]);
    }

    public function tambah_balita()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.tambah-balita', [
            'users' => $users
        ]);
    }

    public function tambah_bidan()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.tambah-bidan', [
            'users' => $users
        ]);
    }

    public function post_tambah_bidan(Request $request)
    {
        $validatedbidan = $request->validate([
            'bidan_nama'   => 'required',
            'bidan_sipb'   => 'required',
            'bidan_alamat'   => 'required',
            'bidan_telepon'   => 'required',
        ]);
        $bidan = new Bidan;
        $savebidan = $bidan->create([
            'bidan_nama'   => $validatedbidan["bidan_nama"],
            'bidan_sipb'   => $validatedbidan["bidan_sipb"],
            'bidan_alamat'   => $validatedbidan["bidan_alamat"],
            'bidan_telepon'   => $validatedbidan["bidan_telepon"],
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $savebidan->save();
        return redirect()->route('daftar-bidan')->with('status', 'Data bidan baru berhasil ditambahkan!');
    }

    public function tambah_jadwal_posyandu()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.tambah-jadwal-posyandu', [
            'users' => $users
        ]);
    }

    public function ubah_balita($id)
    {
        $balita = Balita::find($id);
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.ubah-balita', [
            'users' => $users,
            'balita' => $balita
        ]);
    }

    public function post_ubah_balita(Request $request, $id)
    {
        $balita = Balita::find($id);
        $ttl_balita = $request->balita_ttl;
        if ($ttl_balita == NULL) {
            $ttl_balita = $balita->balita_ttl;
        } else {
            $ttl_balita = $request->balita_ttl;
        }
        $ubahbalita = $balita->update([
            'balita_nama'   => $request->balita_nama,
            'balita_ttl'    => $ttl_balita,
            'balita_jeniskelamin'   => $request->balita_jeniskelamin,
            'balita_nik'    => $request->balita_nik,
            'balita_nama_ortu'  => $request->balita_nama_ortu,
            'balita_provinsi'   => $request->balita_provinsi,
            'balita_kota'   => $request->balita_kota,
            'balita_kecamatan'  => $request->balita_kecamatan,
            'balita_puskesmas'  => $request->balita_puskesmas,
            'balita_desa'   => $request->balita_desa,
            'balita_posyandu'   => $request->balita_posyandu,
            'updated_at' => now()
        ]);
        return redirect()->route('daftar-balita')->with('status', 'Data Balita berhasil diubah!');
    }

    public function ubah_bidan($id)
    {
        $bidan = Bidan::find($id);
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.ubah-bidan', [
            'users' => $users,
            'bidan' => $bidan
        ]);
    }

    public function post_ubah_bidan(Request $request, $id)
    {
        $bidan = Bidan::find($id);
        $ubahbidan = $bidan->update([
            'bidan_nama'   => $request->bidan_nama,
            'bidan_sipb'   => $request->bidan_sipb,
            'bidan_alamat'   => $request->bidan_alamat,
            'bidan_telepon'   => $request->bidan_telepon,
            'updated_at' => now()
        ]);
        return redirect()->route('daftar-bidan')->with('status', 'Data bidan berhasil diubah!');
    }

    public function post_tambah_jadwal_posyandu(Request $request)
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        $validatedData = $request->validate([
            'nama_posyandu' => 'required',
            'alamat_posyandu' => 'required',
            'tanggal_posyandu' => 'required',
            'kecamatan_posyandu' => 'required',
        ]);
        $jadwal_posyandu = new Jadwal;
        $saveJadwalPosyandu = $jadwal_posyandu->create([
            'nama_posyandu' => $validatedData["nama_posyandu"],
            'alamat_posyandu' => $validatedData["alamat_posyandu"],
            'tanggal_posyandu' => $validatedData["tanggal_posyandu"],
            'kecamatan_posyandu' => $validatedData["kecamatan_posyandu"],
        ]);
        $saveJadwalPosyandu->save();
        return redirect()->route('daftar-jadwal-posyandu')->with('status', 'Jadwal telah berhasil ditambahkan!');
    }

    public function daftar_jadwal_posyandu()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        $jadwal = Jadwal::paginate(5);
        // $jadwal = Jadwal::where('created_at', '<', now())->paginate(5);
        return view('admin.daftar-jadwal-posyandu', [
            'users' => $users,
            'jadwal' => $jadwal
        ]);
    }

    public function lihat_jadwal($id)
    {
        $jadwal = Jadwal::find($id);
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.lihat-jadwal', [
            'users' => $users,
            'jadwal' => $jadwal
        ]);
    }

    public function ubah_jadwal($id)
    {
        $jadwal = Jadwal::find($id);
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.ubah-jadwal', [
            'users' => $users,
            'jadwal' => $jadwal
        ]);
    }

    public function post_ubah_jadwal(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        $tanggal_jadwal = $request->tanggal_posyandu;
        if ($tanggal_jadwal == NULL) {
            $tanggal_jadwal = $jadwal->tanggal_posyandu;
        } else {
            $tanggal_jadwal = $request->tanggal_posyandu;
        }
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        $ubahjadwal = $jadwal->update([
            'nama_posyandu' => $request->nama_posyandu,
            'alamat_posyandu' => $request->alamat_posyandu,
            'tanggal_posyandu' => $tanggal_jadwal,
            'kecamatan_posyandu' => $request->kecamatan_posyandu,
            'updated_at' => now()
        ]);
        return redirect()->route('daftar-jadwal-posyandu')->with('status', 'Jadwal Posyandu telah berhasil diubah!');
    }

    public function daftar_bidan()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        $bidan = Bidan::paginate(5);
        return view('admin.daftar-bidan', [
            'users' => $users,
            'bidan' => $bidan
        ]);
    }

    public function daftar_balita()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        $balita = Balita::paginate(5);
        return view('admin.daftar-balita', [
            'users' => $users,
            'balita' => $balita,
        ]);
    }

    public function login()
    {
        $users = session('data_login');
        if ($users !== null) {
            return redirect('dashboard')->with('status', 'Anda telah login, tidak dapat beralih ke halaman login!');
        }
        return view('login');
    }

    public function register()
    {
        $users = session('data_login');
        if ($users !== null) {
            return redirect('dashboard')->with('gagal_beralih', 'Anda telah login, tidak dapat beralih ke halaman login!');
        }
        return view('register');
    }

    public function logout(Request $request)
    {
        $request->session()->forget(['data_login']);
        $request->session()->flush();
        return redirect()->route('login')->with('status', 'Anda telah logout!');
    }

    public function profile()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.profile', [
            'users' => $users
        ]);
    }

    public function lihat_profile_balita($id)
    {
        $balita     = Balita::find($id);
        // dd($balita);
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        if ($balita == NULL){
            return redirect()->route('daftar-balita')->with('status', 'Maaf Data balita yang anda inginkan tidak tersedia / telah dihapus.');
        } else {
            return view('admin.profile-balita', [
                'users' => $users,
                'balita' => $balita
            ]);
        }
    }

    public function lihat_profile_bidan($id)
    {
        $bidan     = Bidan::find($id);
        // dd($bidan);
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        if ($bidan == NULL){
            return redirect()->route('daftar-bidan')->with('status', 'Maaf Data bidan yang anda inginkan tidak tersedia / telah dihapus.');
        } else {
            return view('admin.profile-bidan', [
                'users' => $users,
                'bidan' => $bidan
            ]);
        }
    }

    public function tambah_data_pengguna()
    {
        $sessionUser = session('data_login');
        $users = Login::find($sessionUser->id);
        return view('admin.tambah-data-pengguna', [
            'users' => $users
        ]);
    }

    public function hapus_bidan(Request $request, $id)
    {
        $bidan_id = $id;
        $findBidan = Bidan::findOrFail($bidan_id);
        $findBidan->forceDelete();
        return redirect()->route('daftar-bidan')->with('status', 'Data Balita telah dihapus!');
    }

    public function hapus_balita(Request $request, $id)
    {
        $balita_id = $id;
        $findUser = Balita::findOrFail($balita_id);
        $findUser->forceDelete();
        return redirect()->route('daftar-balita')->with('status', 'Data Balita telah dihapus!');
    }

    public function hapus_jadwal(Request $request, $id)
    {
        $jadwal_id = $id;
        $findUser = Jadwal::findOrFail($jadwal_id);
        $findUser->forceDelete();
        return redirect()->route('daftar-jadwal-posyandu')->with('status', 'Data Balita telah dihapus!');
    }

    public function post_login(Request $request)
    {
        $cariUser = Login::where('login_username', $request->login_username)->get();
        if ($cariUser->isEmpty()) {
            return back()->with('status', 'Maaf username atau password salah!')->withInput();
        }
        $data_login = Login::where('login_username', $request->login_username)->firstOrFail();
        switch ($data_login->login_level) {
            case 'admin':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard');
                    }
                }
                break;
            case 'bidan':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard');
                    }
                }
                break;
            case 'user':
                $cek_password = Hash::check($request->login_password, $data_login->login_password);
                if ($data_login) {
                    if ($cek_password) {
                        $users = session(['data_login' => $data_login]);
                        return redirect()->route('dashboard');
                    }
                }
                break;
        }
        return back()->with('
        ', 'Maaf username atau password salah!')->withInput();
    }

    public function post_register(Request $request)
    {
        $login_data = new Login;
        $validatedLogin = $request->validate([
            'login_nama' => 'required',
            'login_username' => 'required',
            'login_password' => 'required',
            'login_email' => 'required',
            'login_telepon' => 'required'
        ]);
        $hashPassword = Hash::make($validatedLogin["login_password"], [
            'rounds' => 12,
        ]);
        $token_raw = Str::random(16);
        $token = Hash::make($token_raw, [
            'rounds' => 12,
        ]);
        $level = "user";
        $login_status = "verified";
        $login_data = Login::create([
            'login_nama' => $validatedLogin["login_nama"],
            'login_username' => $validatedLogin["login_username"],
            'login_password' => $hashPassword,
            'login_email' => $validatedLogin["login_email"],
            'login_telepon' => $validatedLogin["login_telepon"],
            'login_token' => $token,
            'login_level' => $level,
            'login_status' => $login_status,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $login_data->save();
        return redirect()->route('login')->with('status', 'Berhasil melakukan registrasi!');
    }

    public function post_tambah_balita(Request $request)
    {
        $validatedBalita = $request->validate([
            'balita_nama'   => 'required',
            'balita_ttl'    => 'required',
            'balita_jeniskelamin'   => 'required|filled',
            'balita_nik'    => 'required',
            'balita_nama_ortu'  => 'required',
            'balita_provinsi'   => 'required',
            'balita_kota'   => 'required',
            'balita_kecamatan'  => 'required',
            'balita_puskesmas'  => 'required',
            'balita_desa'   => 'required',
            'balita_posyandu'   => 'required'
        ]);
        $balita = new Balita;
        $saveBalita = $balita->create([
            'balita_nama'   => $validatedBalita["balita_nama"],
            'balita_ttl'    => $validatedBalita["balita_ttl"],
            'balita_jeniskelamin'   => $validatedBalita["balita_jeniskelamin"],
            'balita_nik'    => $validatedBalita["balita_nik"],
            'balita_nama_ortu'  => $validatedBalita["balita_nama_ortu"],
            'balita_provinsi'   => $validatedBalita["balita_provinsi"],
            'balita_kota'   => $validatedBalita["balita_kota"],
            'balita_kecamatan'  => $validatedBalita["balita_kecamatan"],
            'balita_puskesmas'  => $validatedBalita["balita_puskesmas"],
            'balita_desa'   => $validatedBalita["balita_desa"],
            'balita_posyandu'   => $validatedBalita["balita_posyandu"],

            'created_at' => now(),
            'updated_at' => now()
        ]);
        $saveBalita->save();
        return redirect()->route('daftar-balita')->with('status', 'Data Balita baru berhasil ditambahkan!');
    }
}
