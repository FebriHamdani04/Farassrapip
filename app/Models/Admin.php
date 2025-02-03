<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = ['username', 'password'];

    public function aspirasi()
    {
        return $this->hasMany(Aspirasi::class, 'admin_id', 'id');
    }
}
