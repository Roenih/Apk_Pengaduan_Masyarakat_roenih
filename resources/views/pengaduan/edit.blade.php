<!doctype html>
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
</html>