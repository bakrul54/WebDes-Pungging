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
                            <img src="/gambar/300.jpg" class="card-img-top" alt="Kades Pungging">
                            <div class="card-body">
                                <h5 class="card-title text-center">Kades Pungging</h5>
                                <p class="card-text text-center" style="font-size: 8pt;">BAKRUL</p>
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