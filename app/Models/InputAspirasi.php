<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputAspirasi extends Model
{
    protected $table = 'input_aspirasi';
    protected $primaryKey = 'id_pelaporan';

    protected $fillable = [
        'nis',
        'pilihan',
        'id_kategori',
        'lokasi',
        'ket',
        'gambar'
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis', 'nis');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function aspirasiStatus()
    {
        return $this->hasOne(Aspirasi::class, 'id_kategori', 'id_kategori');
    }

    public function aspirasi()
    {
        return $this->belongsTo(Aspirasi::class, 'id_kategori', 'id_kategori');
    }
}