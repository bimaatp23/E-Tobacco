@extends('Index')

@section('Title')
    Edit Karyawan
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthEditKaryawan') }}" method="post" class="static-form">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-4">
                <div class="w-full text-center">
                    <input type="text" name="nama" placeholder="Nama" value="{{ $Data->nama }}" required>
                </div>
                <div class="w-full text-center">
                    <select name="tingkat" required>
                        <option value="">Tingkat</option>
                        <option value="Tetap" <?php if ($Data->tingkat == 'Tetap') { echo 'selected'; } ?>>Tetap</option>
                        <option value="Kontrak" <?php if ($Data->tingkat == 'Kontrak') { echo 'selected'; } ?>>Kontrak</option>
                    </select>
                </div>
                <div class="w-full text-center">
                    <input type="text" name="username" placeholder="Username" value="{{ $Data->username }}" readonly>
                </div>
                <div class="w-full text-center">
                    <input type="text" name="password" placeholder="Password" value="{{ $Data->password }}"  required>
                </div>
                <div class="w-full text-center">
                    <button type="submit">Edit</button>
                </div>
            </div>
        </form>
    </div>
@endsection