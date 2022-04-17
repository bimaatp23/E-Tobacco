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
}
