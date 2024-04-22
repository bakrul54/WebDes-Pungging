@extends('layouts.main')

@section('container')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="container mt-4">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
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
                    <img src="/gambar/sawah.jpeg" class="d-block w-100" alt="Pemandangan-Sawah">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p>Pemandangan Persawahan Desa Pungging</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/gambar/pabrik.jpeg" class="d-block w-100" alt="Struktur">
                    <div class="carousel-caption d-none d-md-block">
                        <h5></h5>
                        <p>Salah Satu Industri Desa Pungging</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="card" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="card-header">
                Sejarah Desa Pungging
            </div>
            <div class="card-body">
                <p class="card-text">Desa Pungging terbentuk berawal dari Kasultanan Solo memberi perintah kepada Tumenggung
                    Wirojoyo untuk mendirikan Padepokan di arah Timur.Di tengah perjalanan Tumenggung Wirojoyo bertemu orang
                    tua bernama Sampurno dan mendapat petunjuk untuk mendirikan padepokan. Setelah itu Sampurno menghilang
                    tanpa jejak (sirno kertaning bumi) dan untuk mengenang pertemuan dengan Sampurno, ditandai dengan pohon
                    asem yang tumbuh sangat besar dan diberi nama Mbah Sar. Selama proses pembangunan Padepokan, Tumenggung
                    Wirojoyo meminta bantuan putranya yaitu Pangeran Joyo Kusumo Hadiningrat atau sebutan lain Pangeran
                    Pengging Joyo Hadiningrat dan padepokan tersebut dinamakan Padepokan Pengging.</p>
                <p>Seiring berjalannya waktu, Padepokan Pengging berkembang pesat dan memiliki banyak pengikut yang kemudian
                    oleh Tumenggung Wirojoyo diserahkan kepada putranya Pangeran Joyo Hadiningrat untuk memimpin Padepokan
                    dengan dibantu putranya Raden Waluyo Jati. Selama menjalankan tugas menjaga kemananan Raden Waluyo Jati
                    bertemu dengan Dewi Sekar Putih dan Kyai Sosro Basir (murid SUnan Kalijogo). Atas jasanya tersebut
                    Pangeran Pengging Joyo Hadiningrat menjodohkan Raden Waluyojati dengan Dewi Sekar Putih dan kepada Kyai
                    Sosro Basir atas permintaannya diberi tanah yang nantinya akan dipergunakan untuk membangun masjid.</p>
                <p>Selama proses pembangunan masjid tersebut Kyai Sosro Basir dibantu para pengikut atau murid dari
                    Padepokan Pengging dan diberi nama Masjid Al Basiri, dan kemudian menggali tanah untuk sumur guna
                    mengambil air wudhu atas petunjuk dari Dewi Sekar Sari yang merupakan adik dari Dewi Sekar Putih.
                    Menurut keterangan narasumber bangunan masjid bersejarah tersebut hilang tanpa jejak (sirno kertaning
                    bumi) dan sampai sekarang masyarakat percaya bahwasannya bangunan masjid tersebut ada namun tidak kasat
                    mata dan berada di sekitar makam Kyai Sosro Basir. Lalu ada bangunan sumur serta sumber mata air yang
                    tidak pernah kering dipercaya sangat berkhasiat untuk kesehatan.</p>
                <a href="/profil" class="btn btn-outline-dark active" role="button" aria-pressed="true">Profil Desa
                    Selengkapnya </a>
            </div>
        </div>

        {{-- @foreach ($posts as $post)
          <article class="mb-5">
              <h2>
                  <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
              </h2>
              <h5>By: {{ $post->author }}</h5>
              <p>{{ $post->body }}</p>
          </article>
        @endforeach --}}

        <div class="row -bg-primary">
            <div class="col-sm-8">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB4DJF-Tzzh1AWhK0wQbP9yJbfoY_VxyME&amp;q=Desa+Kertamulya%2CPadalarang%2CBandung+Barat%2CJawa+Barat%2C"
                    width="100%" height="300" frameborder="0" style="border:0;x-pointer-events:none;"
                    allowfullscreen=""></iframe>
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
                                    <td>AGRARIS</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Klasifikasi</th>
                                    <td width="1px">:</td>
                                    <td>SWAKARYA</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Kategori</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">MULA</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Luas Wilayah</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">352.255 Ha</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Utara</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Balongmasin</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Selatan</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Randuharjo</td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Timur</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Kembangringgit </td>
                                </tr>
                                <tr>
                                    <th width="40%" nowrap="">Batas Sebelah Barat</th>
                                    <td width="1px">:</td>
                                    <td nowrap="">Desa Tunggalpager</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <p>Desa Pungging terdiri dari 7 Dusun, 10 Rukun Warga atau RW, dan 49 Rukun Tetangga atau RT dengan rincian sebagai
            berikut :</p>
        <div>
            <canvas id="barChart" width="200" height="100" style="margin-bottom: 50px;"></canvas>
        </div>
        <script>
            // Data identitas dusun
            const dusunData = [{
                    name: 'Dusun Patung',
                    rw: 2,
                    rt: 12
                },
                {
                    name: 'Dusun Pungging',
                    rw: 3,
                    rt: 19
                },
                {
                    name: 'Dusun Mejerat',
                    rw: 1,
                    rt: 4
                },
                {
                    name: 'Dusun Tamansari',
                    rw: 1,
                    rt: 4
                },
                {
                    name: 'Dusun Kanigoro',
                    rw: 1,
                    rt: 4
                },
                {
                    name: 'Dusun Gebang',
                    rw: 1,
                    rt: 3
                },
                {
                    name: 'Dusun Jagil',
                    rw: 1,
                    rt: 2
                }
            ];

            // Mengambil elemen canvas
            const ctx = document.getElementById('barChart').getContext('2d');

            // Membuat array label dan data untuk chart
            const labels = dusunData.map(data => data.name);
            const rwData = dusunData.map(data => data.rw);
            const rtData = dusunData.map(data => data.rt);

            // Membuat chart
            const barChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'RW',
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1,
                        data: rwData
                    }, {
                        label: 'RT',
                        backgroundColor: 'rgba(255, 99, 132, 0.5)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1,
                        data: rtData
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>
    </div>
@endsection
