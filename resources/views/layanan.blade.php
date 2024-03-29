@extends('layouts.main')

@section('container')
    <h1>Layanan</h1>
    <h2>Form Permintaan Surat</h2>
    <div class="container-sm">
    <form action="/layanan" method="POST">
        @csrf
            <div class="mb-3">
                <label for="jenis_surat" class="form-label">Jenis Surat:</label>
                <select class="form-select" name="jenis_surat" id="jenis_surat">
                    <option value="Surat Kematian">Surat Kematian</option>
                    <option value="Surat Keterangan Kurang Mampu">Surat Keterangan Kurang Mampu</option>
                    <option value="Surat Keterangan Domisili">Surat Keterangan Domisili</option>
                    <option value="Surat Kelahiran">Surat Kelahiran</option>
                    <option value="Surat Nikah">Surat Nikah</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="NIK" class="form-label">NIK:</label>
                <input type="text" class="form-control" id="NIK" name="NIK">
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir:</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>
            <div class="mb-3">
                <label for="agama" class="form-label">Agama:</label>
                <input type="text" class="form-control" id="agama" name="agama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon:</label>
                <input type="text" class="form-control" id="telepon" name="telepon">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>

      <!-- Popup Alert Bootstrap -->
      <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Header modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Success!</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Body modal -->
                <div class="modal-body">
                    Formulir berhasil disubmit.
                </div>

                <!-- Footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('myForm').addEventListener('submit', function(event) {
            event.preventDefault();

            // Kirim formulir menggunakan AJAX atau jalankan kode untuk menyimpan data di sini

            var myAlert = new bootstrap.Modal(document.getElementById('myModal'), {
                keyboard: false
            });
            myAlert.show();
        });
    </script>
@endsection