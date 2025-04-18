<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'jurusan',
        'semester'
    ];

    protected $table = 'table_mata_kuliah';

    public $timestamps = false;

    public function mkSemester()
    {
        return $this->hasMany(mkSemester::class, 'id', 'mk_id');
    }
}
