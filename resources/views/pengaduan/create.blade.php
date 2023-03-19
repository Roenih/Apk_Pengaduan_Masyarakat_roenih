@extends('templates.master')
@section('header', 'Create Pengaduan')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-sm-8">
                    <h6>Create</h6>
                </div>
                <div class="col-sm-4">
                    <a href="/pengaduan" class="btn bg-gradient-warning btn-sm float-end" style="margin-right: 25px">Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body px-4 py-4">
            <form action="/pengaduan/store" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Tanggal Pengaduan</label>
                        <input class="form-control" name="tgl_pengaduan" type="date" id="example-date-input">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">NIK</label>
                        <select class="form-control" name="nik">
                            <option>Pilih NIK/Nama</option>
                             @foreach($user as $i => $p)
                             <option value="{{ $p->id }}">{{ $p->nama }} - {{ $p->nik }}</option>
                             @endforeach
                        </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Foto</label>
                        <input type="file" name="foto" class="form-control" id="exampleFormControlInput1">    
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Isi Laporan</label>
                        <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn bg-gradient-info">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
@endsection
{{-- <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                  <strong>TAMBAH DATA</strong> 
                </div>
                <div class="card-body">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/pengaduan/store">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" placeholder="">
                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggal_pengaduan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nik</label>
                            <input type="char" name="nik" class="form-control" placeholder="">
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Isi laporan</label>
                            <input type="text" name="isi_laporan" class="form-control" placeholder="">
                            @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control" placeholder="">
                            @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html> --}}