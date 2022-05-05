@extends('Index')

@section('Title')
    Tambah Absensi
@endsection

@section('Main')
    <div class="container mx-auto">
        <form action="{{ route('AuthTambahAbsensi') }}" method="post" enctype="multipart/form-data" class="static-form">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mx-4">
                <div class="w-full text-center">
                    <input type="file" name="file" class="file" required>
                </div>
                <div class="w-full text-center">
                    <select name="aktifitas" required>
                        <option value="">Aktifitas</option>
                        @foreach ($Aktifitas as $dt)
                        <option value="{{ $dt->id }}">{{ $dt->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-full text-center col-span-2">
                    <input type="text" name="deskripsi" placeholder="Deskripsi" required>
                </div>
                <div class="w-full text-center">
                    <select name="kabupaten" id="kabupaten" required>
                        <option value="">Kabupaten</option>
                    </select>
                </div><div class="w-full text-center">
                    <select name="kecamatan" id="kecamatan" required>
                        <option value="">Kecamatan</option>
                    </select>
                </div><div class="w-full text-center">
                    <select name="desa" id="desa" required>
                        <option value="">Desa</option>
                    </select>
                </div>
                <div class="w-full text-center">
                    <button type="submit">Tambah</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('JS')
    <script>
        $(document).ready(function(){
            $.ajax({
                type: 'POST',
                url: "Kabupaten.php",
                cache: false, 
                success: function(msg){
                $("#kabupaten").html(msg);
                }
            });
            $("#kabupaten").change(function(){
            var kabupaten = $("#kabupaten").val();
                $.ajax({
                    type: 'POST',
                    url: "Kecamatan.php",
                    data: {kabupaten: kabupaten},
                    cache: false,
                    success: function(msg){
                    $("#kecamatan").html(msg);
                    }
                });
            });
            $("#kecamatan").change(function(){
            var kecamatan = $("#kecamatan").val();
                $.ajax({
                    type: 'POST',
                    url: "Desa.php",
                    data: {kecamatan: kecamatan},
                    cache: false,
                    success: function(msg){
                    $("#desa").html(msg);
                    }
                });
            });
        });
    </script>
@endsection