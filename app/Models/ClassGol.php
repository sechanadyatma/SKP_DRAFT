<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassGol extends Model
{
    use HasFactory;

    protected $table = 'class';
    protected $fillable = ['name'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'class_id', 'id');
    }
}