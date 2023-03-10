@extends('templates.master')
@section('header', 'Update User')
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
            <form action="/user/update/{{ $user->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-date-input" class="form-control-label">NIK</label>
                        <input class="form-control" name="nik" value="{{ $user->nik }}" type="number" id="example-date-input">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Email</label>
                          <input class="form-control" name="email" value="{{ $user->email }}" type="email" id="example-date-input">
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="example-date-input" class="form-control-label">Nama</label>
                          <input type="text" name="nama" value="{{ $user->nama }}" class="form-control" id="exampleFormControlInput1">
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
                            <input type="text" name="alamat" value="{{ $user->alamat }}" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">RT</label>
                            <input type="text" name="rt" value="{{ $user->rt }}" class="form-control" id="exampleFormControlInput1">    
                        </div>
                      </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">RW</label>
                            <input type="text" name="rw" value="{{ $user->rw }}" class="form-control" id="exampleFormControlInput1">    
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Kode Pos</label>
                            <input type="number" name="kode_pos" value="{{ $user->kode_pos }}" class="form-control" id="exampleFormControlInput1">
                        </div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Provinsi</label>
                            <select class="form-control" id="selectProvinsi" name="province_id">
                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Kota/Kabupaten</label>
                            <select class="form-control" id="selectKota" name="regency_id">
                                <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Kecamatan</label>
                            <select class="form-control" id="selectKecamatan" name="district_id">
                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                          <label for="example-text-input" class="form-control-label">Kecamatan</label>
                          <select class="form-control" id="selectKelurahan" name="village_id">
                            <option value="{{ $village->id }}">{{ $village->name }}</option>
                          </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-date-input" class="form-control-label">Level/Roles</label>
                            <select class="form-control" name="level" id="exampleFormControlSelect1">
                                <option selected="{{ $user->level }}">{{ $user->level }}</option>
                                <option value="admin">admin</option>
                                <option value="petugas">petugas</option>
                                <option value="user">user</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="example-text-input" class="form-control-label">No Telp</label>
                                <input class="form-control" value="{{ $user->telp }}" name="telp" type="number" id="example-date-input">
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