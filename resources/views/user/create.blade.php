@extends('templates.master')
@section('header', 'Create User')
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
                    <a href="/user" class="btn bg-gradient-warning btn-sm float-end" style="margin-right: 25px">Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body px-4 py-4">
            <form action="/user/store" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="validationNIK" class="form-control-label">NIK</label>
                        <input class="form-control" name="nik" type="number" id="validationNIK" autocomplete="off">
                        @if ($errors->has('nik'))
                            <span class="text-danger">{{ $errors->first('nik') }}</span>
                        @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email</label>
                        <input class="form-control" name="email" type="email" id="example-date-input" autocomplete="off">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" autocomplete="off">
                            @if ($errors->has('nama'))
                                <span class="text-danger">{{ $errors->first('nama') }}</span>
                            @endif
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                            <div style="display:flex;">
                                <div class="form-check" style="margin-right: 20px">
                                    <input class="form-check-input" type="radio" value="laki-laki" name="jenkel" id="laki-laki">
                                    <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" value="perempuan" name="jenkel" id="perempuan">
                                    <label class="custom-control-label" for="perempuan">Perempuan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" autocomplete="off">
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">RT</label>
                            <input type="text" name="rt" class="form-control" id="exampleFormControlInput1">    
                        </div>
                      </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">RW</label>
                            <input type="text" name="rw" class="form-control" id="exampleFormControlInput1">    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Kode Pos</label>
                            <input type="number" name="kode_pos" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Provinsi</label>
                            <select class="form-control" id="selectProvinsi" name="province_id">
                                <option>Pilih Provinsi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Kota/Kabupaten</label>
                            <select class="form-control" id="selectKota" name="regency_id">
                                <option>Pilih Kota/Kabupaten</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Kecamatan</label>
                            <select class="form-control" id="selectKecamatan" name="district_id">
                              <option>Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Kelurahan</label>
                          <select class="form-control" id="selectKelurahan" name="village_id">
                            <option>Pilih Kelurahan</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Level/Roles</label>
                            <select class="form-control" name="level" id="exampleFormControlSelect1">
                                <option>Pilih Level</option>
                                <option value="admin">admin</option>
                                <option value="petugas">petugas</option>
                                <option value="user">user</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                                <label for="example-text-input" class="form-control-label">No Telp</label>
                                <input class="form-control" name="telp" type="number" id="example-date-input">
                                @if ($errors->has('telp'))
                                    <span class="text-danger">{{ $errors->first('telp') }}</span>
                                @endif
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