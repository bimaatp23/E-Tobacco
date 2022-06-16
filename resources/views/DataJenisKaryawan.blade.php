@php
    function Nominal($Angka) {
        $Angka = floatval($Angka);
        if (fmod($Angka, 1) == 0) {
            return 'Rp.'.number_format($Angka,0,',','.').',-';
        } else {
            return 'Rp.'.number_format($Angka,1,',','.').',-';
        }
    }
@endphp

@extends('Index')

@section('Title')
    Data Jenis Karyawan
@endsection

@section('Main')
    <div class="static-table">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Jenis</th>
                    <th>Gaji Pokok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $num = 1; ?>
                @foreach ($JenisKaryawan as $dt)    
                <tr>
                    <td><b>{{ $num++ }}</b></td>
                    <td>{{ $dt->nama }}</td>
                    <td>{{ Nominal($dt->gaji) }}</td>
                    <td>
                        <a href="{{ url('EditJenisKaryawan/'.$dt->id) }}"><label for="">Edit</label></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection