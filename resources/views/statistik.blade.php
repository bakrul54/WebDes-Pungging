@extends('layouts.main')

@section('container')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="container mt-4">
        <h1>Data Statistik</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Grafik Penduduk Berdasarkan Jenis Kelamin
                    </div>
                    <div class="card-body">
                        <canvas id="genderChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById('genderChart').getContext('2d');
                var genderChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: ['Laki-laki', 'Perempuan'],
                        datasets: [{
                            label: 'Jumlah Penduduk Berdasarkan Jenis Kelamin',
                            data: [4208, 4626],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Grafik Tingkat Pendidikan
                    </div>
                    <div class="card-body">
                        <canvas id="myChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
            <script>
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [
                            @foreach ($statistiks as $statistik)
                                '{{ $statistik->pendidikan }}',
                            @endforeach
                        ],
                        datasets: [{
                            label: 'Jumlah',
                            data: [
                                @foreach ($statistiks as $statistik)
                                    {{ $statistik->jumlah }},
                                @endforeach
                            ],
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 0.2)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>
@endsection
