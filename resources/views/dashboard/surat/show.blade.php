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
                        <div class="mb-3">
                            <strong class="label">Email:</strong> {{ $surat->email }}
                        </div>

                        <!-- Formulir untuk upload file PDF -->
                        <form action="{{ route('surat.upload', $surat->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="file">Upload File PDF:</label>
                                <input type="file" name="file" id="file" accept=".pdf" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </form>

                        <!-- Tombol untuk mengirim email -->
                        <form action="{{ route('surat.kirim', $surat->id) }}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success mt-3">Kirim</button>
                        </form>
                        <!-- Pesan sukses (jika ada) -->
                        @if (session('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                    </div>
                    <!-- Tombol kembali -->
                    <a href="/dashboard/surat" class="btn btn-dark mt-3">Back</a>

                </div>
            </div>
        </div>
    </div>
@endsection
