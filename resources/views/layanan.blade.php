@extends('layouts.main')

<style>
    h1 {
        font-size: 36px;
        font-weight: bold;
        padding-bottom: 25px;
    }

    /* 
    .container-sm {
    margin: 0 auto; 
    max-width: 500px; 
    padding-bottom: 50px; 
    } */

    .form-label {
        font-weight: bold;
    }

    .btn-primary {
        margin-bottom: 50px;
    }
</style>

@section('container')
<div class="container mt-4">
    <h1>Form Permintaan Surat</h1>
    <div class="container-sm">
        <form action="/layanan" method="POST">
            @csrf
            <div class="mb-3">
                <label for="jenis_surat" class="form-label">Jenis Surat:</label>
                <select class="form-select" name="jenis_surat" id="jenis_surat" required>
                    <option value="Surat Kematian">Surat Kematian</option>
                    <option value="Surat Keterangan Kurang Mampu">Surat Keterangan Kurang Mampu</option>
                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                    <option value="Surat Kelahiran">Surat Kelahiran</option>
                    <option value="Surat Nikah">Surat Nikah</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="informasi" class="form-label">Informasi Tambahan Surat :</label>
                <textarea class="form-control" id="informasi" name="informasi" rows="5" placeholder="Contoh : Meninggal tanggal 10/03/2024" required></textarea>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="NIK" class="form-label">NIK:</label>
                <input type="number" class="form-control" id="NIK" name="NIK" required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required>
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama:</label>
                <select class="form-select" name="agama" id="agama" required>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon:</label>
                <input type="number" class="form-control" id="telepon" name="telepon" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Modal -->
    @if(isset($error) || isset($status))
    <div id="myModal" class="modal d-block" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header text-center">
                    <h4 class="modal-title"></h4>
                </div>
                <!-- body modal -->
                <div class="modal-body text-center">
                    <h3>Surat gagal dikirim!</h3>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection