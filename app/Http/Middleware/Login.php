<?php

namespace App\Http\Middleware;

use Closure;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('Login')) {
            $Check = DB::table('gaji')->where('periode', date('M Y', mktime('0', '0', '0', date('n')-1, 1, date('Y'))))->count();
            if ($Check == 0) {
                $Karyawan = DB::table('users')
                            ->where('level', 'Karyawan')
                            ->join('jenis_karyawan', 'users.jenis_karyawan_id', 'jenis_karyawan.id')
                            ->select('users.*', 'jenis_karyawan.gaji as gaji')
                            ->get();
                foreach ($Karyawan as $dt) {
                    $tgl1 = new DateTime(date('Y-m-d', mktime('18', '0', '0', date('m'), 1, date('Y'))));
                    $tgl2 = new DateTime(date('Y-m-d', mktime('6', '0', '0', date('m')-1, 1, date('Y'))));
                    $TanggunganKerja = $tgl2->diff($tgl1)->days + 1;
                    $HariKerja = DB::table('absensi')
                                ->where('username', $dt->username)
                                ->where('waktu', '<', mktime('18', '0', '0', date('m'), 1, date('Y')))
                                ->where('waktu', '>', mktime('6', '0', '0', date('m')-1, 1, date('Y')))
                                ->count();
                    $Alpha = $TanggunganKerja-$HariKerja;
                    $Denda = 0;
                    if ($Alpha <= 7) {
                        $Denda = $Alpha*100000;
                    } else {
                        $Denda = $dt->gaji;
                    }
                    DB::table('gaji')->insert([
                        'waktu' => $dt->gaji,
                        'username_users' => $dt->username,
                        'gaji_pokok' => $dt->gaji,
                        'tanggungan_kerja' => $TanggunganKerja,
                        'hari_kerja' => $HariKerja,
                        'denda' => $Denda,
                        'gaji_bersih' => $dt->gaji-$Denda,
                        'periode' => date('M Y', mktime('0', '0', '0', date('n')-1, 1, date('Y'))),
                        'status' => 'Belum Terbayar'
                    ]);
                }
            }
            return $next($request);
        } else {
            return redirect()->route('Login');
        }
    }
}
