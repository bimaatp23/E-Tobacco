@extends('Index')

@section('Title')
    Data Karyawan
    <a href="{{ route('TambahKaryawan') }}" class="float-right"><label>Tambah</label></a>
@endsection

@section('Main')
    <div class="static-table">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Jenis Karyawan</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $num = 1; ?>
                @foreach ($Karyawan as $dt)    
                <tr>
                    <td><b>{{ $num++ }}</b></td>
                    <td>{{ $dt->nama }}</td>
                    <td>{{ $dt->nama_jenis_karyawan }}</td>
                    <td>{{ $dt->username }}</td>
                    <td>{{ $dt->password }}</td>
                    <td>
                        <a href="{{ url('PengaturanProfile/'.$dt->username) }}"><label for="">Edit</label></a>
                        <a href="{{ url('HapusKaryawan/'.$dt->id) }}"><label for="">hapus</label></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection