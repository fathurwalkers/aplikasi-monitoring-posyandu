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

class GenerateController extends Controller
{
    public function generate_balita()
    {
        // $cekdatetime = date_format(date_create_from_format('d/m/Y', '01/01/2022'), 'd/m/Y');
        // $cekdatetime = date_format(date_create_from_format('d/m/Y H:i:s', '01/01/2022 18:38:23'), 'd/m/Y H:i:s');
        // dd($cekdatetime);
        $nik    = [
            '6471032505200000',
            '7414060507200000',
            '7414600409206190',
            '7414064507200000',
            '7414602210205810',
            '7414604109206120',
            '7414066205200000',
            '7414600311202470',
            '7414604507209950',
            '7414602503203160'
        ];

        $nama_balita   = [
            'Muh. Abdul Syukur',
            'Muh. Daffa Syaputra',
            'Zufar',
            'Arumi Nasha',
            'Mizra',
            'Hana',
            'Aziza Mei',
            'Lafa',
            'Keisha Mikayla',
            'Alfa Rizki'
        ];

        $gender = [
            'L',
            'L',
            'L',
            'P',
            'L',
            'P',
            'P',
            'L',
            'P',
            'L'
        ];

        // $ttl        = [
        //     '5/25/2020',
        //     '7/5/2020',
        //     '9/4/2020',
        //     '7/5/2020',
        //     '10/22/2020',
        //     '9/1/2020',
        //     '5/22/2020',
        //     '11/3/2020',
        //     '7/5/2020',
        //     '9/18/2020'
        // ];
        $ttl        = [
            date('d/m/Y', strtotime('5/25/2020')),
            date('d/m/Y', strtotime('7/5/2020')),
            date('d/m/Y', strtotime('9/4/2020')),
            date('d/m/Y', strtotime('7/5/2020')),
            date('d/m/Y', strtotime('10/22/2020')),
            date('d/m/Y', strtotime('9/1/2020')),
            date('d/m/Y', strtotime('5/22/2020')),
            date('d/m/Y', strtotime('11/3/2020')),
            date('d/m/Y', strtotime('7/5/2020')),
            date('d/m/Y', strtotime('9/18/2020'))
        ];

        $nama_ortu = [
            'Mardin',
            'Baharudin',
            'Nanang',
            'Hasan',
            'La Atuni',
            'Mirna',
            'Jamal',
            'La Ondo',
            'Muslimin',
            'Ilham'
        ];

        $kota = 'Buton Tengah';
        $desa = 'Bombonawulu';
        $provinsi = 'Sulawesi Tenggara';
        $posyandu = 'Bombonawulu';
        $kecamatan = 'Gu';
        $puskesmas = 'Gu';

        // CODE NAME FATHUR
        $countnamaortu = count($nama_ortu);
        for ($i = 0; $i < $countnamaortu; $i++) {
            $faker = Faker::create('id_ID');
            $login_model = new Login;
            $password = '12345';
            $hashPassword = Hash::make($password, [
                'rounds' => 12,
            ]);
            $token_raw = Str::random(16);
            $token = Hash::make($token_raw, [
                'rounds' => 12,
            ]);
            $level = "user";
            $login_status = "verified";
            $login_data = $login_model->create([
                'login_nama'        => $faker->name,
                'login_username'    => 'user' . $i . strtoupper(Str::random(5)),
                'login_password'    => $hashPassword,
                'login_email'       => $faker->email,
                'login_telepon'     => $faker->phoneNumber,
                'login_token'       => $token,
                'login_level'       => $level,
                'login_status'      => $login_status,
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
            $login_data->save();

            $balita_model = new Balita;
            $balita_data = $balita_model->create([
                'balita_nama'           => $nama_balita[$i],
                // 'balita_ttl'            => $datettl,
                'balita_ttl'            => $ttl[$i],
                'balita_jeniskelamin'   => $gender[$i],
                'balita_nik'            => $nik[$i],
                'balita_nama_ortu'      => $nama_ortu[$i],
                'balita_provinsi'       => $provinsi,
                'balita_kota'           => $kota,
                'balita_kecamatan'      => $kecamatan,
                'balita_puskesmas'      => $puskesmas,
                'balita_desa'           => $desa,
                'balita_posyandu'       => $posyandu,
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $balita_data->login()->associate($login_data->id);
            $balita_data->save();
        }
        return redirect()->route('dashboard')->with('status', 'Berhasil Generate data Balita!');
    }

    public function generate_bidan()
    {
        $nama_bidan = [
            'wa Ode musyanti Amir Hamzah, Amd. Kep',
            'Indrawati, AM. Keb',
            'Nurmila, AM. Keb',
            'Musriah, Amd. Keb',
            'Nurma, AM. Keb',
            'Syamlia, AM. Keb'
        ];

        $sipb   = [
            '030/446/bidan/IX/20202',
            '004/446/bidan/II/2021',
            '019/446/bidan/VII/2020',
            '446/bidan/29/IV/2019',
            '002/446/bidan/I/2021',
            'proses perpanjangan'
        ];

        $alamat_bidan  = [
            'watulea',
            'watulea',
            'watulea',
            'bombonawulu',
            'bombonawulu',
            'bombonawulu'
        ];

        $telepon_bidan = [
            '082260201861',
            '081253675399',
            '082276456697',
            '081298768885',
            '082133453455',
            '082135500645'
        ];

        $countsipb      = count($sipb);
        for ($i = 0; $i < $countsipb; $i++) {
            $faker = Faker::create('id_ID');
            $login_model = new Login;
            $password = '12345';
            $hashPassword = Hash::make($password, [
                'rounds' => 12,
            ]);
            $token_raw = Str::random(16);
            $token = Hash::make($token_raw, [
                'rounds' => 12,
            ]);
            $level = "bidan";
            $login_status = "verified";
            $login_data = $login_model->create([
                'login_nama'        => $faker->name,
                'login_username'    => 'bidan' . $i . strtoupper(Str::random(5)),
                'login_password'    => $hashPassword,
                'login_email'       => $faker->email,
                'login_telepon'     => $faker->phoneNumber,
                'login_token'       => $token,
                'login_level'       => $level,
                'login_status'      => $login_status,
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
            $login_data->save();

            $bidan_model = new Bidan;
            $bidan_data = $bidan_model->create([
                'bidan_nama'           => $nama_bidan[$i],
                'bidan_sipb'            => $sipb[$i],
                'bidan_alamat'            => $alamat_bidan[$i],
                'bidan_telepon'            => $telepon_bidan[$i],
                'created_at'            => now(),
                'updated_at'            => now()
            ]);
            $bidan_data->login()->associate($login_data->id);
            $bidan_data->save();
        }
        return redirect()->route('dashboard')->with('status', 'Berhasil Generate data Bidan!');
    }

    public function generate_jadwal()
    {
        $kota = ['Pasarwajo', 'Siompu', 'Baubau', 'Kendari', 'Wameo'];
        $namapos = ['Posyandu POS 1', 'Posyandu POS 2', 'Posyandu POS 3', 'Posyandu POS 4', 'Posyandu POS 5', 'Posyandu POS 6', 'Posyandu POS 7', 'Posyandu POS 8', 'Posyandu POS 9', 'Posyandu POS 10' ];
        $countpos = count($namapos);
        for ($i = 0; $i < $countpos; $i++) {
            $faker = Faker::create('id_ID');
            $jadwal_posyandu = new Jadwal;
            $saveJadwalPosyandu = $jadwal_posyandu->create([
                'nama_posyandu'   => $namapos[$i],
                'alamat_posyandu'   => Arr::random($kota),
                'tanggal_posyandu'  => $faker->date,
                'kecamatan_posyandu'   => 'Gu',
                'created_at'        => now(),
                'updated_at'        => now()
            ]);
            $saveJadwalPosyandu->save();
        }
        return redirect()->route('daftar-jadwal-posyandu')->with('status', 'Jadwal telah berhasil ditambahkan!');
    }

    public function chained_generate()
    {
        $this->generate_balita();
        $this->generate_bidan();
        $this->generate_jadwal();
        return redirect()->route('dashboard')->with('status', 'Berhasil melakukan generate data beruntun!');
    }
}
