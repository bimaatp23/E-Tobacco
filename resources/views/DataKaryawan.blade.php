@extends('Index')

@section('Title')
    Data Karyawan
    <a href="{{ route('TambahKaryawan') }}" class="float-right"><label><i class="fa-solid fa-user-plus"></i></label></a>
@endsection

@section('Main')
    <div class="static-table">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tingkat</th>
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
                    <td>{{ $dt->tingkat }}</td>
                    <td>{{ $dt->username }}</td>
                    <td>{{ $dt->password }}</td>
                    <td>
                        <a href="{{ url('EditKaryawan/'.$dt->id) }}"><label for=""><i class="fa-solid fa-pencil"></i></label></a>
                        <a href="{{ url('HapusKaryawan/'.$dt->id) }}"><label for=""><i class="fa-solid fa-trash"></i></label></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection