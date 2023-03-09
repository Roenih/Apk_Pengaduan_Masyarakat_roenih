@extends('templates.master')
@section('header', 'tanggapan')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-sm-8">
                    <h6>Tanggapan Table</h6>
                </div>
                <div class="col-sm-4">
                    <a href="/tanggapan/create" class="btn bg-gradient-success btn-sm float-end" style="margin-right: 25px">Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal Tanggapan</th>
                  <th>Tanggapan</th>
                  <th>ID User</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody style="text-aling: center;">
                @foreach($tanggapan as $i => $p)
                    <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td class="text-center">{{ $p->tgl_tanggapan }}</td>
                        <td class="text-center">{{ $p->tanggapan }}</td>
                        <td class="text-center">{{ $p->id_user }}</td>
                        <td>
                            <a href="/tanggapan/edit/{{ $p->id_tanggapan }}" class="btn bg-gradient-primary">Edit</a>
                            <a href="/tanggapan/delete/{{ $p->id_tanggapan }}" class="btn bg-gradient-warning">Hapus</a>
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