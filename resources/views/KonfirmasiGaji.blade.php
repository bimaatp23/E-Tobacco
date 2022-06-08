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
    Konfirmasi Gaji
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthKonfirmasiGaji') }}" method="post" enctype="multipart/form-data" class="static-form">
            <input type="text" name="id" value="{{ $Gaji->id }}" style="display: none">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-4">
                <div class="w-full text-center">
                    <input type="text" name="nama" placeholder="Nama" value="{{ $Gaji->nama }}" readonly>
                </div>
                <div class="w-full text-center">
                    <input type="text" name="noRekening" placeholder="No Rekening" value="{{ $Gaji->no_rekening }}" readonly>
                </div>
                <div class="w-full text-center">
                    <input type="text" name="gajiBersih" placeholder="Gaji Bersih" value="{{ Nominal($Gaji->gaji_bersih) }}" readonly>
                </div>
                <div class="w-full text-center">
                    <input type="file" name="file" class="file" required>
                </div>
                <div class="w-full text-center">
                    <button type="submit">Konfirmasi</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('JS')
    
@endsection