<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mkSemester extends Model
{
    protected $fillable = [
        'mahasiswa_id',
        'mk_id'
    ];

    protected $table = 'table_mk_semester';

    public $timestamps = false;

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id');
    }

    public function mataKuliah()
    {
        return $this->belongsTo(MataKuliah::class, 'mk_id');
    }
}

