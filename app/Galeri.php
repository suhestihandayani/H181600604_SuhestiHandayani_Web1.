<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $guarded = array();
    protected $table='galeri';
    protected $fillabel=[
        'nama', 'path', 'keterangan', 'users_id', 'kategori_galeri_id'
    ];
    protected $casts=[
    ];
}
