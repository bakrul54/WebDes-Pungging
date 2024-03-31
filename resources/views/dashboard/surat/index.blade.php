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
        <th style="width:35%" scope="col">Nama</th>
        <th style="width:25%" scope="col">Jenis Surat</th>
        <th style="width:20%" scope="col">Nomor Telfon</th>
        <th style="width:15%" scope="col">Action</th>
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
              <a href="#" class="badge bg-info" onclick="event.preventDefault(); document.getElementById('show-surat-form-{{ $surat->id }}').submit();"><span data-feather="eye"></span></a>
              <form id="show-surat-form-{{ $surat->id }}" action="{{ route('dashboard.surat.show', $surat->id) }}" method="GET" style="display: none;">
                  @csrf
              </form>

              <a href="{{ route('dashboard.surat.destroy', $surat->id) }}" class="badge bg-danger" onclick="event.preventDefault(); document.getElementById('delete-surat-form-{{ $surat->id }}').submit();"><span data-feather="x-circle"></span></a>
              <form id="delete-surat-form-{{ $surat->id }}" action="{{ route('dashboard.surat.destroy', $surat->id) }}" method="POST" style="display: none;">
                  @csrf
                  @method('DELETE')
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection