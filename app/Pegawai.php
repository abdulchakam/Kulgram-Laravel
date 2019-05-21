<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table ='pegawai';
    protected $fillable =['nama_pegawai','alamat_pegawai','pekerjaan_pegawai','hobi_pegawai'];
}
