<?php
function Nominal($Angka) {
    $Angka = floatval($Angka);
    if (fmod($Angka, 1) == 0) {
        return number_format($Angka,0,',','.');
    } else {
        return number_format($Angka,1,',','.');
    }
}
?>

@extends('Index')

@section('Title')
    Data Kinerja Dan Gaji
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthKinerjaDanGaji') }}" method="post" class="static-form">
            <input type="text" name="username" value="{{ $username }}" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mx-4">
                <div class="w-full text-center">
                    <select name="bulan" required>
                        <option value="">Bulan</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>
                <div class="w-full text-center">
                    <select name="tahun" required>
                        <option value="">Tahun</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="w-full text-center">
                    <button type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>
    <div class="m-4">
        <table>
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Hari Kerja</th>
                    <th>Terlambat</th>
                    <th>Gaji Harian</th>
                    <th>Gaji Pokok</th>
                </tr>
            </thead>
            <tbody>
                @if (Session::has('Data'))    
                <tr>
                    <td>{{ Session::get('Data')[0] }}</td>
                    <td>{{ Session::get('Data')[1] }}</td>
                    <td>{{ Session::get('Data')[2] }}</td>
                    <td>{{ Session::get('Data')[3] }}</td>
                    <td>{{ 'Rp. '.Nominal(Session::get('Data')[4]) }}</td>
                    <td>{{ 'Rp. '.Nominal(Session::get('Data')[5]) }}</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection