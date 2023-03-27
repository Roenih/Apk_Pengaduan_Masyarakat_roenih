@extends('templates.master')
@section('header', 'Pengaduan')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-sm-8">
                    <h6>Pengaduan Table</h6>
                </div>
                <div class="col-sm-4">
                    @if (Auth::user()->level == 'admin' || Auth::user()->level == 'user')
                      <a href="/pengaduan/create" class="btn bg-gradient-success btn-sm float-end" style="margin-right: 25px">Tambah</a>
                      <a href="/pengaduan/pdf" class="btn bg-gradient-success btn-sm float-end" style="margin-right: 25px">Unduh laporan</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">Tanggal Pengaduan</th>
                  @if (Auth::user()->level != 'user')
                      <th class="text-center">NIK</th>
                      <th class="text-center">Nama</th> 
                  @endif
                  <th class="text-center">Isi laporan</th>
                  <th class="text-center">Foto</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody style="text-aling: center;">
                @foreach($pengaduan as $i => $p)
                    <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td class="text-center">{{ $p->tgl_pengaduan }}</td>
                        @if (Auth::user()->level != 'user')
                            <td class="text-center">{{ $p->nik }}</td>
                            <td class="text-center">{{ $p->nama }}</td>
                        @endif
                        <td class="text-center">{{ $p->isi_laporan }}</td>
                        <td class="text-center"><img src="{{ asset('image/'. $p->foto ) }}" height="10%" width="20%" alt="Foto Pengaduan"></td>
                        <td>
                            @if (Auth::user()->level != 'user')
                              @if (Auth::user()->level != 'petugas')
                                <a href="/pengaduan/edit/{{ $p->id_pengaduan }}" class="btn bg-gradient-primary">Edit</a>
                                <a href="/pengaduan/delete/{{ $p->id_pengaduan }}" class="btn bg-gradient-warning ">Hapus</a>
                              @endif
                              <a href="/tanggapan/action/{{ $p->id_pengaduan }}" class="btn bg-gradient-info">Tanggapi</a>
                            @endif
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection