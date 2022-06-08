<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class MasterController extends Controller
{
    public function Login() {
        if (Session::has('Login')) { return redirect()->route('Dashboard');}
        return view('Login');
    }
    public function AuthLogin(Request $req) {
        $User = DB::table('users')->where('username', $req->username);
        if ($User->count() == 1) {
            $User = $User->first();
            if ($User->password == $req->password) {
                Session::put('Login', TRUE);
                Session::put('Nama', $User->nama);
                Session::put('Username', $User->username);
                Session::put('Password', $User->password);
                Session::put('Level', $User->level);
                return redirect()->route('Dashboard');
            } else {
                Session::flash('alertError', 'Password Salah');
                return back();
            }
        } else {
            Session::flash('alertError', 'Username Tidak Terdaftar');
            return back();
        }
    }
    public function Logout() {
        Session::forget('Login');
        Session::forget('Nama');
        Session::forget('Username');
        Session::forget('Password');
        Session::forget('Level');
        return redirect()->route('Login');
    }
    public function Dashboard() {
        return view('Dashboard');
    }
    public function PengaturanProfile($username) {
        $Data = DB::table('users')->where('username', $username)->first();
        $JenisKaryawan = DB::table('jenis_karyawan')->get();
        return view('PengaturanProfile', compact('Data', 'JenisKaryawan'));
    }
    public function AuthPengaturanProfile(Request $req) {
        $Data = DB::table('users')->where('username', $req->username);
        $Tanggal = explode('-', $req->tanggalLahir);
        $Profile = 'Default.jpg';
        if (!empty($req->file)) {
            $NamaFile = $req->username.'.'.$req->file->getClientOriginalExtension();
            $req->file->move('../public/Profile', $NamaFile);
            $Profile = $NamaFile;
        }
        $Data->update([
            'nama' => $req->nama,
            'jenis_kelamin' => $req->jenisKelamin,
            'tanggal_lahir' => mktime(12, 0, 0, $Tanggal[1], $Tanggal[2], $Tanggal[0]),
            'alamat' => $req->password,
            'no_hp' => $req->noHp,
            'no_rekening' => $req->noRekening,
            'jenis_karyawan_id' => $req->jenisKaryawan,
            'profile_picture' => $Profile,
            'password' => $req->password
        ]);
        if ($req->username == Session::get('Username')) {
            Session::put('Nama', $req->nama);
            Session::put('Password', $req->password);
        }
        Session::flash('alertSuccess', 'Profile Berhasil Diperbarui');
        return back();
    }
    public function DataKaryawan() {
        $Karyawan = DB::table('users')
                    ->where('level', 'Karyawan')
                    ->join('jenis_karyawan', 'users.jenis_karyawan_id', '=', 'jenis_karyawan.id')
                    ->select('users.*', 'jenis_karyawan.nama as nama_jenis_karyawan')
                    ->get();
        return view('DataKaryawan', compact('Karyawan'));
    }
    public function TambahKaryawan() {
        $JenisKaryawan = DB::table('jenis_karyawan')->get();
        return view('TambahKaryawan', compact('JenisKaryawan'));
    }
    public function AuthTambahKaryawan(Request $req) {
        $Data = DB::table('users')->where('username', $req->username);
        if ($Data->count() == 0) {
            DB::table('users')->insert([
                'nama' => $req->nama,
                'level' => 'Karyawan',
                'tanggal_masuk' => time(),
                'jenis_karyawan_id' => $req->jenisKaryawan,
                'profile_picture' => 'Default.jpg',
                'username' => $req->username,
                'password' => $req->password
            ]);
            Session::flash('alertSuccess', 'Data Karyawan Berhasil Ditambah');
            return redirect()->route('DataKaryawan');
        } else {
            Session::flash('alertError', 'Username Telah Digunakan');
            return back();
        }
    }
    public function EditKaryawan($id) {
        $Data = DB::table('karyawan')->where('id', $id)->first();
        return view('EditKaryawan', compact('Data'));
    }
    public function AuthEditKaryawan(Request $req) {
        DB::table('karyawan')->where('username', $req->username)->update([
            'nama' => $req->nama,
            'tingkat' => $req->tingkat,
            'password' => $req->password
        ]);
        Session::flash('alertSuccess', 'Data Karyawan Berhasil Diedit');
        return redirect()->route('DataKaryawan');
    }
    public function HapusKaryawan($id) {
        $Data = DB::table('users')->where('id', $id)->first();
        return view('HapusKaryawan', compact('Data'));
    }
    public function AuthHapusKaryawan(Request $req) {
        DB::table('users')->where('username', $req->username)->delete();
        Session::flash('alertSuccess', 'Data Karyawan Berhasil Dihapus');
        return redirect()->route('DataKaryawan');
    }
    public function DataAbsensi() {
        $Absensi = DB::table('absensi');
        if (Session::get('Level') == 'Karyawan') {
            $Absensi = $Absensi->where('username', Session::get('Username'));
        }
        $Absensi = $Absensi
                    ->join('aktifitas', 'absensi.id_aktifitas', '=', 'aktifitas.id')
                    ->join('kabupaten', 'absensi.id_kabupaten', '=', 'kabupaten.id')
                    ->join('kecamatan', 'absensi.id_kecamatan', '=', 'kecamatan.id')
                    ->join('desa', 'absensi.id_desa', '=', 'desa.id')
                    ->select('absensi.*', 'aktifitas.nama as nama_aktifitas', 'kabupaten.nama as nama_kabupaten', 'kecamatan.nama as nama_kecamatan', 'desa.nama as nama_desa')
                    ->get();
        return view('DataAbsensi', compact('Absensi'));
    }
    public function TambahAbsensi() {
        $Aktifitas = DB::table('aktifitas')->get();
        return view('TambahAbsensi', compact('Aktifitas'));
    }
    public function AuthTambahAbsensi(Request $req) {
        if (date('H') >= 7 && date('H') < 17) {
            $Check = DB::table('absensi')
                    ->where('username', Session::get('Username'))
                    ->where('waktu', '>', mktime('7', '0', '0', date('n'), date('j'), date('Y')))
                    ->where('waktu', '<', mktime('17', '0', '0', date('n'), date('j'), date('Y')))
                    ->count();
            if ($Check == 0) {
                $Waktu = time();
                $NamaFile = $Waktu.'.'.$req->file->getClientOriginalExtension();
                $req->file->move('../public/Doc', $NamaFile);
                DB::table('absensi')->insert([
                    'waktu' => $Waktu,
                    'dokumentasi' => $NamaFile,
                    'id_aktifitas' => $req->aktifitas,
                    'deskripsi' => $req->deskripsi,
                    'id_kabupaten' => $req->kabupaten,
                    'id_kecamatan' => $req->kecamatan,
                    'id_desa' => $req->desa,
                    'username' => Session::get('Username')
                ]);
                Session::flash('alertSuccess', 'Data Absensi Berhasil Ditambah');
            } else {
                Session::flash('alertError', 'Data Absensi Gagal Ditambah');
            }
        } else {
            Session::flash('alertError', 'Data Absensi Gagal Ditambah');
        }
        return redirect()->route('DataAbsensi');
    }
    public function DataGaji() {
        $Gaji = DB::table('gaji');
        if (Session::get('Level') == 'Karyawan') {
            $Gaji = $Gaji->where('username', Session::get('Username'));
        }
        $Gaji = $Gaji
                ->join('users', 'gaji.username_users', 'users.username')
                ->select('gaji.*', 'users.nama as nama')
                ->get();
        return view('DataGaji', compact('Gaji'));
    }
    public function KonfirmasiGaji($id) {
        $Gaji = DB::table('gaji')
                ->join('users', 'gaji.username_users', 'users.username')
                ->select('gaji.*','users.nama as nama', 'users.no_rekening as no_rekening')
                ->where('gaji.id', $id)
                ->first();
        return view('KonfirmasiGaji', compact('Gaji'));
    }
    public function Time($hari, $bulan, $tahun) {
        echo mktime(12, 0, 0, $bulan, $hari, $tahun);
    }
    public function AuthKonfirmasiGaji(Request $req) {
        $NamaFile = time().'.'.$req->file->getClientOriginalExtension();
        $req->file->move('../public/Bukti', $NamaFile);
        DB::table('gaji')
            ->where('id', $req->id)
            ->update([
                'bukti' => $NamaFile,
                'status' => 'Terbayar'
            ]);
        Session::flash('alertSuccess', 'Data Gaji Berhasil Dikonfirmasi');
        return redirect()->route('DataGaji');
    }
}
