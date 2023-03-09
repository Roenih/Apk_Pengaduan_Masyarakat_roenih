@extends('templates.master')
@section('header', 'Edit Tanggapan')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-sm-8">
                    <h6>Edit</h6>
                </div>
                <div class="col-sm-4">
                    <a href="/tanggapan" class="btn btn-success btn-sm float-end" style="margin-right: 25px">kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body px-4 py-4">
            <form action="/tanggapan/update/{{$tanggapan->id_tanggapan}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">Tanggal Tanggapan</label>
                        <input class="form-control" value="{{$tanggapan->tgl_tanggapan}}" name="tgl_tanggapan" type="date" id="example-date-input">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Tanggapan</label>
                        <input type="string" name="tanggapan" value="{{$tanggapan->tanggapan}}"class="form-control" id="exampleFormControlInput1">
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">ID User</label>
                        <input type="integer" name="id_user" value="{{$tanggapan->id_user}}"class="form-control" id="exampleFormControlInput1">    
                    </div>
                  </div>
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
                  <strong>UPDATE DATA</strong> 
                </div>
                <div class="card-body">
                    <a href="/pengaduan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    <form method="post" action="/pengaduan/update/{{$pengaduan->id_pengaduan}}">
                        {{ csrf_field() }}
                        @method('PUT')
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
                            <input type="text" value="{{ $pengaduan->nik }}"  name="nik" class="form-control" placeholder="">
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Isi laporan</label>
                            <input type="text" value="{{ $pengaduan->isi_laporan }}" name="isi_laporan" class="form-control" placeholder="">
                            @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="foto" value="{{ $pengaduan->foto }}"  class="form-control" placeholder="">
                            @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label><b>Status</b></label>
                               <input type="radio" name="status" value="Proses" id="Proses" checked> &nbsp; Proses
                               <input type="radio" name="status" value="Selesai" id="Selesai"> &nbsp; Selesai
                           @if ($errors->has('status'))
                               <div class="text-danger">
                                   {{ $errors->first('status')}}
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