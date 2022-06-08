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
    Data Gaji
@endsection

@section('Main')
    <div class="static-table">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Periode</th>
                    <th>Gaji Pokok</th>
                    <th>Tanggungan Kerja</th>
                    <th>Hari Kerja</th>
                    <th>Denda</th>
                    <th>Gaji Bersih</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $num = 1; ?>
                @foreach ($Gaji as $dt)    
                <tr>
                    <td><b>{{ $num++ }}</b></td>
                    <td>{{ $dt->nama }}</td>
                    <td>{{ $dt->periode }}</td>
                    <td>{{ Nominal($dt->gaji_pokok) }}</td>
                    <td>{{ $dt->tanggungan_kerja }} Hari</td>
                    <td>{{ $dt->hari_kerja }} Hari</td>
                    <td>{{ Nominal($dt->denda) }}</td>
                    <td>{{ Nominal($dt->gaji_bersih) }}</td>
                    <td>{{ $dt->status }}</td>
                    <td>
                        @if (!empty($dt->bukti))
                        <a onclick="bukti('{{ $dt->bukti }}')"><label for="">Bukti</label></a>
                        @endif
                        @if (Session::get('Level') == 'Manager')
                        <a href="{{ url('KonfirmasiGaji/'.$dt->id) }}"><label for="">Konfirmasi</label></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('JS')
    <script>
        function bukti(bukti) {
            Swal.fire({
                title: 'Bukti Transfer Gaji',
                imageUrl: 'Bukti/'+bukti,
                imageWidth: '80%',
                showConfirmButton: false,
            });
        }
    </script>
@endsection