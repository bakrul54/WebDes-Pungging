@extends('layouts.main')

@section('container')
    <div class="container mt-4">

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/gambar/KantorDesa.png" class="d-block w-100" alt="Kantor-Desa">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p>Kantor Desa Pungging</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="/gambar/struktur_org_desa.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5></h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        @foreach ($posts as $post)
            <article class="mb-5">
                <h2>
                    <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
                </h2>
                <h5>By: {{ $post["author"] }}</h5>
                <p>{{ $post["body"] }}</p>
            </article>
        @endforeach

        <div class="row -bg-primary">
            <div class="col-sm-8">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB4DJF-Tzzh1AWhK0wQbP9yJbfoY_VxyME&amp;q=Desa+Kertamulya%2CPadalarang%2CBandung+Barat%2CJawa+Barat%2C" width="100%" height="300" frameborder="0" style="border:0;x-pointer-events:none;" allowfullscreen=""></iframe>
            </div>
            <div class="col-sm-4 pt-xxl -hidden-xs">
                <div class="container" style="width:100%;">
                    <div class="table-responsive">
                        <table class="table -table-striped table-preview">
                            <tbody>
                                <tr>
                                    <th width="40%" nowrap="">Kode PUM</th>
                                    <td width="1px">:</td>
                                    <td>----</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Tahun Pembentukan</th>
                                    <td width="1px">:</td>
                                    <td>----</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Dasar Hukum</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">----</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Tipologi</th>
                                    <td width="1px">:</td>
                                    <td>exmp PERINDUSTRIAN/JASA</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Klasifikasi</th>
                                    <td width="1px">:</td>
                                    <td>exmp SWAKARYA</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Kategori</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">exmp MULA</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Luas Wilayah</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">--- ha</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Utara</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Balongmasin</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Selatan</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Kalipuro</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Timur</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Randuharjo & Kembangringgit  </td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Barat</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Lebaksono & Tunggalpager</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
@endsection