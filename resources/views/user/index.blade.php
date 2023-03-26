@extends('templates.master')
@section('header', 'User')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-sm-8">
                    <h6>User Table</h6>
                </div>
                <div class="col-sm-4">
                    <a href="/user/create" class="btn bg-gradient-success btn-sm float-end" style="margin-right: 25px">Tambah</a>
                    <a href="/user/cetak-pdf" class="btn btn-icon btn-sm btn-primary">
                      <span class="btn-inner--icon"><i class="ni ni-book-bookmark"></i></span>
                      <span class="btn-inner--text">Cetak Laporan</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telp</th>
                  <th>Jenis Kelamin</th>
                  <th>Level</th>
                  <th>Alamat</th>
                  <th>RT</th>
                  <th>RW</th>
                  <th>Kode Pos</th>
                  <th>Provinsi</th>
                  <th>Kota/Kabupaten</th>
                  <th>Kecamatan</th>
                  <th>Kelurahan/Desa</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody style="text-aling: center;">
                @foreach($user as $i => $p)
                    <tr>
                        <td class="text-center">{{ $i+1 }}</td>
                        <td class="text-center">{{ $p->nik}}</td>
                        <td class="text-center">{{ $p->nama }}</td>
                        <td class="text-center">{{ $p->email }}</td>
                        <td class="text-center">{{ $p->telp }}</td>
                        <td class="text-center">{{ $p->jenkel }}</td>
                        <td class="text-center">{{ $p->level }}</td>
                        <td class="text-center">{{ $p->alamat }}</td>
                        <td class="text-center">{{ $p->rt }}</td>
                        <td class="text-center">{{ $p->rw }}</td>
                        <td class="text-center">{{ $p->kode_pos}}</td>
                        <td class="text-center">{{ $p->province_id}}</td>
                        <td class="text-center">{{ $p->regency_id}}</td>
                        <td class="text-center">{{ $p->district_id}}</td>
                        <td class="text-center">{{ $p->village_id}}</td>
                        <td>
                            <a href="/user/edit/{{ $p->id }}" class="btn bg-gradient-primary">Edit</a>
                            <a href="/user/delete/{{ $p->id }}" class="btn bg-gradient-warning ">Hapus</a>
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