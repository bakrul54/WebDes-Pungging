@extends('layouts.main')

@section('container')
    <h1>Layanan</h1>
    <h2>Form Permintaan Surat</h2>
    <form action="/layanan" method="POST">
        @csrf
        <label for="jenis_surat">Jenis Surat:</label>
        <select name="jenis_surat" id="jenis_surat">
            <option value="Surat A">Surat A</option>
            <option value="Surat B">Surat B</option>
            <option value="Surat C">Surat C</option>
            <option value="Surat D">Surat D</option>
            <option value="Surat E">Surat E</option>
        </select>
        <br><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br><br>
        <label for="NIK">NIK:</label>
        <input type="text" name="NIK" id="NIK">
        <br><br>
        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir">
        <br><br>
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir">
        <br><br>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br><br>
        <label for="pekerjaan">Pekerjaan:</label>
        <input type="text" name="pekerjaan" id="pekerjaan">
        <br><br>
        <label for="agama">Agama:</label>
        <input type="text" name="agama" id="agama">
        <br><br>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
        <br><br>
        <label for="telepon">Telepon:</label>
        <input type="text" name="telepon" id="telepon">
        <br><br>
        <button type="submit">Submit</button>
    </form>
@endsection