<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devices extends Model
{
    protected $fillable = [
        'nama_device', 'status_device', 'deskripsi',
    ];
}
