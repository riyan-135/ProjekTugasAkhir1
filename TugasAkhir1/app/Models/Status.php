<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $guarded = [];

    public function datakaryawan(){
        return $this->hasMany(DataKaryawan::class , 'status_id', 'id');
    }
}
