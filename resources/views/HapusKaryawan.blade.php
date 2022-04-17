@extends('Index')

@section('Title')
    Hapus Karyawan
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthHapusKaryawan') }}" method="post" class="static-form">
            <input type="text" name="username" value="{{ $Data->username }}" class="hidden">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-4">
                <div class="w-full text-center col-span-3">
                    <label>Yakin Hapus Data Karyawan <b>{{ $Data->nama }}</b> ({{ $Data->username }}) ?</label>
                </div>
                <div class="w-full text-center">
                    <button type="submit">Hapus</button>
                </div>
            </div>
        </form>
    </div>
@endsection