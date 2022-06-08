@extends('Index')

@section('Title')
    Data Absensi
    @if (Session::get('Level') == 'Karyawan')
    <a href="{{ route('TambahAbsensi') }}" class="float-right"><label>Tambah</label></a>
    @endif
@endsection

@section('Main')
    <div class="static-table">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Waktu</th>
                    <th>Aktifitas</th>
                    <th>Kabupaten</th>
                    <th>Kecamatan</th>
                    <th>Desa</th>
                    @if (Session::get('Level') == 'Manager')
                    <th>Username</th>
                    @endif
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $num = 1; ?>
                @foreach ($Absensi as $dt)    
                <tr>
                    <td><b>{{ $num++ }}</b></td>
                    <td>{{ date('d/M/Y H:i:s', $dt->waktu) }}</td>
                    <td>{{ $dt->nama_aktifitas }}</td>
                    <td>{{ $dt->nama_kabupaten }}</td>
                    <td>{{ $dt->nama_kecamatan }}</td>
                    <td>{{ $dt->nama_desa }}</td>
                    @if (Session::get('Level') == 'Manager')
                    <td>{{ $dt->username }}</td>
                    @endif
                    <td>
                        <a onclick="detail('{{ $dt->dokumentasi }}', '{{ $dt->deskripsi }}')"><label for="">Detail</label></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('JS')
    <script>
        function detail(dokumentasi, deskripsi) {
            Swal.fire({
                title: 'Detail Aktifitas',
                imageUrl: 'Doc/'+dokumentasi,
                imageWidth: '80%',
                text: deskripsi,
                showConfirmButton: false,
            });
        }
    </script>
@endsection