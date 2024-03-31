@extends('layouts.main')

@section('container')
<div class="container mt-4">
    <h1>Struktur Organisasi</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="/gambar/struktur_org_desa.png" alt="Struktural Desa" class="img-fluid">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="card">
                            <img src="https://kertamulya-padalarang.desa.id/assets/files/data/website-desa-kertamulya-3217082001/pegawai/unnamed.jpg" class="card-img-top" alt="Kades Kertamulya">
                            <div class="card-body">
                                <h5 class="card-title text-center">Kades Kertamulya</h5>
                                <p class="card-text text-center" style="font-size: 8pt;">KEPALA DESA</p>
                            </div>
                        </div>
                    </div>
                    <!-- Add more cards here following the same structure -->
                </div>
            </div>
        </div>
    </div>
    
    
</div>
@endsection