<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'tb_dokter'; // Menentukan nama tabel yang sesuai

    protected $primaryKey = 'id_dokter'; // Menentukan primary key yang sesuai

    public $incrementing = false; // Jika id_dokter bukan auto-increment
    protected $keyType = 'string'; // Jika id_dokter adalah string

    protected $fillable = [
        'id_dokter', 'nama_dokter', 'spesialis_dokter', 'jadwal_kerja', 'jam_mulai', 'jam_selesai', 'kontrak_kerja'
    ];

    public $timestamps = true; // Menggunakan created_at dan updated_at yang dikelola oleh Laravel
}
