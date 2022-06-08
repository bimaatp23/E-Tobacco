@extends('Index')

@section('Title')
    Pengaturan Profile ({{ $Data->username }})
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthPengaturanProfile') }}" method="post" enctype="multipart/form-data">
            <input type="text" name="username" value="{{ $Data->username }}" style="display: none">
            <div class="grid grid-cols-1">
                <div class="grid grid-cols-3">
                    <div class="justify-items-center">
                        <center>
                            <img src="{{ asset('Profile/'.$Data->profile_picture) }}" alt="" class="w-[70%] rounded-full">
                            <input type="file" name="file" class="w-[70%]">
                        </center>
                    </div>
                    <div class="col-span-2">
                        <div class="grid grid-cols-2 justify-items-center">
                            <input type="text" name="nama" placeholder="Nama" value="{{ $Data->nama }}" required class="px-2 py-1 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6">
                            <select name="jenisKelamin" class="px-2 py-1.5 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6" required>
                                <option value="">Jenis Kelamin</option>
                                <option value="Pria" <?php if ($Data->jenis_kelamin == 'Pria') { echo 'selected'; } ?>>Pria</option>
                                <option value="Wanita" <?php if ($Data->jenis_kelamin == 'Wanita') { echo 'selected'; } ?>>Wanita</option>
                            </select>
                            <input type="date" name="tanggalLahir" placeholder="Tanggal Lahir" value="<?php if(!empty($Data->tanggal_lahir)) { echo date('Y-m-d', $Data->tanggal_lahir); } ?>" required class="px-2 py-1 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6">
                            <input type="text" name="alamat" placeholder="Alamat" value="{{ $Data->alamat }}" required class="px-2 py-1 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6">
                            <input type="text" name="noHp" placeholder="No Hp" value="{{ $Data->no_hp }}" required class="px-2 py-1 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6">
                            <input type="text" name="noRekening" placeholder="No Rekening" value="{{ $Data->no_rekening }}" required class="px-2 py-1 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6">
                            <select name="jenisKaryawan" class="px-2 py-1.5 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6" required>
                                <option value="">Jenis Karyawan</option>
                                @foreach ($JenisKaryawan as $dt)
                                    <option value="{{ $dt->id }}" <?php if ($dt->id == $Data->jenis_karyawan_id) { echo 'selected'; } ?>>{{ $dt->nama }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="password" placeholder="Password" value="{{ $Data->password }}" required class="px-2 py-1 w-[90%] rounded-md text-lg text-green-600 font-medium border-2 border-green-600 hover:bg-slate-100 focus:bg-slate-100 focus:outline-none mb-6">
                            <button type="submit" class="px-3 py-2 w-1/2 rounded-md shadow-lg font-bold text-white bg-gradient-to-r from-green-600 to-green-400 hover:from-green-700 hover:to-green-500 active:ring-4 active:ring-green-600 col-span-2">Perbarui</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection