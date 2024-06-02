<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'tb_pasien'; // Menentukan nama tabel yang sesuai

    protected $primaryKey = 'id_pasien'; // Menentukan primary key yang sesuai

    public $incrementing = false; // Jika id_pasien bukan auto-increment
    protected $keyType = 'string'; // Jika id_pasien adalah string

    protected $fillable = [
        'id_pasien', 'nama_pasien', 'jenis_kelamin', 'alamat_pasien', 'telp_pasien'
    ];

    public $timestamps = true; // Menggunakan created_at dan updated_at yang dikelola oleh Laravel
}
