<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nis', 'kelas'];

    public function inputAspirasi()
    {
        return $this->hasMany(InputAspirasi::class, 'nis', 'nis');
    }
}
