<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table ='siswa';
    protected $fillable =['nis','nama_siswa','alamat_siswa','hobi_siswa'];
}
