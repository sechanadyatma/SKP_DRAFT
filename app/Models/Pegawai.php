<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    public function class()
    {
        return $this->belongsTo(ClassGol::class);
    }

    protected $table = 'pegawai';
    protected $fillable = [
        'name',
        'nip',
        'gender',
        'class_id',
        'image',
];
}