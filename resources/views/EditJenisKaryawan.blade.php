@extends('Index')

@section('Title')
    Edit Jenis Karyawan
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthEditJenisKaryawan') }}" method="post" class="static-form">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-4">
                <input type="hidden" name="id" value="{{ $Data->id }}">
                <div class="w-full text-center">
                    <input type="text" name="jenis" placeholder="Jenis Karyawan" value="{{ $Data->nama }}" readonly>
                </div>
                <div class="w-full text-center">
                    <input type="number" name="gaji" placeholder="Gaji Pokok" value="{{ $Data->gaji }}" required>
                </div>
                <div class="w-full text-center">
                    <button type="submit">Edit</button>
                </div>
            </div>
        </form>
    </div>
@endsection