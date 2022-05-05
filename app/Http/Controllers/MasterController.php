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
        if ($req->level == 'Karyawan') {
            $Data = DB::table('karyawan');
        } else if ($req->level == 'Manager') {
            $Data = DB::table('manager');
        }
        $Data = $Data->where('username', $req->username);
        if ($Data->count() == 1) {
            $Data = $Data->first();
            if ($Data->password == $req->password) {
                Session::put('Login', TRUE);
                Session::put('Nama', $Data->nama);
                Session::put('Username', $Data->username);
                Session::put('Password', $Data->password);
                Session::put('Level', $req->level);
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
    public function PengaturanProfile() {
        return view('PengaturanProfile');
    }
    public function AuthPengaturanProfile(Request $req) {
        if ($req->level == 'Karyawan') {
            $Data = DB::table('karyawan')->where('username', $req->username);
        } else if ($req->level == 'Manager') {
            $Data = DB::table('manager')->where('username', $req->username);
        }
        $Data->update([
            'nama' => $req->nama,
            'password' => $req->password
        ]);
        Session::put('Nama', $req->nama);
        Session::put('Password', $req->password);
        Session::flash('alertSuccess', 'Profile Berhasil Diperbarui');
        return back();
    }
    public function KinerjaDanGaji($username) {
        return view('KinerjaDanGaji', compact('username'));
    }
    public function AuthKinerjaDanGaji(Request $req) {
        $Karyawan = DB::table('karyawan')->where('username', $req->username)->first();
        $Data = DB::table('absensi')
                ->where('username', $Karyawan->username)
                ->where('waktu', '>', mktime(1, 0, 0, $req->bulan, 1, $req->tahun))
                ->where('waktu', '<', mktime(23, 0, 0, $req->bulan, 31, $req->tahun))
                ->get();
        $Bulan = date('M', mktime(1, 0, 0, $req->bulan, 15, $req->tahun));
        $Tahun = date('Y', mktime(1, 0, 0, $req->bulan, 15, $req->tahun));
        $HariKerja = 0;
        foreach ($Data as $dt) {
            $HariKerja += 1;
        }
        if ($Karyawan->tingkat == 'Tetap') {
            $GajiHarian = 80000;
        } else {
            $GajiHarian = 60000;
        }
        Session::flash('Data', [$Bulan, $Tahun, $HariKerja, 0, $GajiHarian, $HariKerja*$GajiHarian]);
        return back();
    }
    public function DataKaryawan() {
        $Karyawan = DB::table('karyawan')->get();
        return view('DataKaryawan', compact('Karyawan'));
    }
    public function TambahKaryawan() {
        return view('TambahKaryawan');
    }
    public function AuthTambahKaryawan(Request $req) {
        $Data = DB::table('karyawan')->where('username', $req->username);
        if ($Data->count() == 0) {
            DB::table('karyawan')->insert([
                'nama' => $req->nama,
                'tingkat' => $req->tingkat,
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
        $Data = DB::table('karyawan')->where('id', $id)->first();
        return view('HapusKaryawan', compact('Data'));
    }
    public function AuthHapusKaryawan(Request $req) {
        DB::table('karyawan')->where('username', $req->username)->delete();
        Session::flash('alertSuccess', 'Data Karyawan Berhasil Dihapus');
        return redirect()->route('DataKaryawan');
    }
    public function DataAbsensi() {
        $Absensi = DB::table('absensi');
        if (Session::get('Level') == 'Karyawan') {
            $Absensi = $Absensi->where('username', Session::get('Username'));
        }
        $Absensi = $Absensi->get();
        $Aktifitas = DB::table('aktifitas');
        $Kabupaten = DB::table('kabupaten');
        $Kecamatan = DB::table('kecamatan');
        $Desa = DB::table('desa')->get();
        return view('DataAbsensi', compact('Absensi', 'Aktifitas', 'Kabupaten', 'Kecamatan', 'Desa'));
    }
    public function TambahAbsensi() {
        $Aktifitas = DB::table('aktifitas')->get();
        return view('TambahAbsensi', compact('Aktifitas'));
    }
    public function AuthTambahAbsensi(Request $req) {
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
        return redirect()->route('DataAbsensi');
    }
}
