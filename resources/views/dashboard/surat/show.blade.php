@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    {{ $surat->jenis_surat }}
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong class="label">Informasi Tambahan Surat:</strong> {{ $surat->informasi }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Nama:</strong> {{ $surat->nama }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">NIK:</strong> {{ $surat->NIK }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Tempat Lahir:</strong> {{ $surat->tempat_lahir }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Tanggal Lahir:</strong> {{ $surat->tanggal_lahir }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Jenis Kelamin:</strong> {{ $surat->jenis_kelamin }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Pekerjaan:</strong> {{ $surat->pekerjaan }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Agama:</strong> {{ $surat->agama }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Alamat:</strong> {{ $surat->alamat }}
                    </div>
                    <div class="mb-3">
                        <strong class="label">Telepon:</strong> {{ $surat->telepon }}
                    </div>
                </div>
            </div>
            <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
</div>
@endsection
