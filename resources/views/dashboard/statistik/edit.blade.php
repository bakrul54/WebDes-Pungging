@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="mt-3">Edit Data Statistik</h2>
                <form action="{{ route('statistik.update', $statistik->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="pendidikan" class="form-label">Tingkat Pendidikan</label>
                        <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                            value="{{ $statistik->pendidikan }}">
                    </div>
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah"
                            value="{{ $statistik->jumlah }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
