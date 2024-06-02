<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    protected $table = 'tb_perawat';
    protected $primaryKey = 'id_perawat';
    public $incrementing = false;
    public $timestamps = true;
    protected $keyType = 'string';

    protected $fillable = [
        'id_perawat', 
        'nama_perawat', 
        'spesialis_perawat', 
        'jadwal_kerja', 
        'jam_mulai', 
        'jam_selesai', 
        'kontrak_kerja'
    ];
}
