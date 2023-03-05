<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $fillable = ['tgl_pengaduan','nik','isi_laporan','foto','status'];
    protected $primarykey = 'id_pengaduan';

    // coba doang
    // coba lagi deh
}
