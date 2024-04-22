@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Statistik Warga</h1>
    </div>

    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th style="width:10%" scope="col">No</th>
                    <th style="width:35%" scope="col">TIngkat Pendidikan</th>
                    <th style="width:35%" scope="col">Jumlah Rukun Warga</th>
                    <th style="width:20%" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statistiks as $statistik)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $statistik->pendidikan }}</td>
                        <td>{{ $statistik->jumlah }}</td>
                        <td>
                            @csrf
                            <a href="{{ route('dashboard.statistik.edit', $statistik->id), Request::is('dashboard') ? 'active' : '' }}"
                                class="badge bg-primary"><span data-feather="edit"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
