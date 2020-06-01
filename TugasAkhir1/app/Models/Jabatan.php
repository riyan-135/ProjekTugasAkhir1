<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Jabatan extends Model
{
    protected $guarded = [];

    public function datakaryawan(){
        return $this->hasMany(DataKaryawan::class , 'jabatan_id', 'id');
    }
}
