@extends('Index')

@section('Title')
    Tambah Karyawan
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthTambahKaryawan') }}" method="post" class="static-form">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-4">
                <div class="w-full text-center">
                    <input type="text" name="nama" placeholder="Nama" required>
                </div>
                <div class="w-full text-center">
                    <select name="tingkat" required>
                        <option value="">Tingkat</option>
                        <option value="Tetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                    </select>
                </div>
                <div class="w-full text-center">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="w-full text-center">
                    <input type="text" name="password" placeholder="Password" required>
                </div>
                <div class="w-full text-center">
                    <button type="submit">Tambah</button>
                </div>
            </div>
        </form>
    </div>
@endsection