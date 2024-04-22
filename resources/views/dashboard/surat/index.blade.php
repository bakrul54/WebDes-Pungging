@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Permintaan Surat</h1>
    </div>

    <div class="table-responsive small">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th style="width:5%" scope="col">No</th>
                    <th style="width:25%" scope="col">Nama</th>
                    <th style="width:20%" scope="col">Jenis Surat</th>
                    <th style="width:15%" scope="col">Nomor Telfon</th>
                    <th style="width:15%" scope="col">Status</th>
                    <th style="width:20%" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($surats as $surat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $surat->nama }}</td>
                        <td>{{ $surat->jenis_surat }}</td>
                        <td>{{ $surat->telepon }}</td>
                        <td>
                            @if ($surat->status == 'Belum Selesai')
                                <span class="badge bg-warning text-dark">{{ $surat->status }}</span>
                            @else
                                <span class="badge bg-success">{{ $surat->status }}</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('dashboard.surat.show', $surat->id) }}" class="btn btn-info">
                                <span data-feather="eye"></span>
                            </a>

                            <form id="delete-surat-form-{{ $surat->id }}"
                                action="{{ route('dashboard.surat.destroy', $surat->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus data ini?')">
                                    <span data-feather="x-circle"></span>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
