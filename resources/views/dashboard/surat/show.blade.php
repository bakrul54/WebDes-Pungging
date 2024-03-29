@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-8">
        <h2>{{ $surat->jenis_surat }}</h2>
        <p><strong>Nama:</strong> {{ $surat->nama }}</p>
        <p><strong>NIK:</strong> {{ $surat->NIK }}</p>
        <p><strong>Tempat Lahir:</strong> {{ $surat->tempat_lahir }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ $surat->tanggal_lahir }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $surat->jenis_kelamin }}</p>
        <p><strong>Pekerjaan:</strong> {{ $surat->pekerjaan }}</p>
        <p><strong>Agama:</strong> {{ $surat->agama }}</p>
        <p><strong>Alamat:</strong> {{ $surat->alamat }}</p>
        <p><strong>Telepon:</strong> {{ $surat->telepon }}</p>
    </div>
</div>
@endsection
