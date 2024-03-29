<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $fillable = ['id_pengaduan','tgl_tanggapan','tanggapan','id_user'];
    protected $primarykey = 'id_tanggapan';

    public function pengaduan()
    {
        return $this->belongsTo('App\Pengaduan', 'id_pengaduan');
    }
}

