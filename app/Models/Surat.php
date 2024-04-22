<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_surat',
        'informasi',
        'email',
        'nama',
        'NIK',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'pekerjaan',
        'agama',
        'alamat',
        'telepon',
        'status'
    ];

    // Default status saat membuat surat baru
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($surat) {
            $surat->status = 'Belum Selesai';
        });
    }
}
