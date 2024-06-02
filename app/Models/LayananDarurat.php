<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LayananDarurat extends Model
{
    use HasFactory;

    protected $table = 'tb_layanandarurat';
    protected $primaryKey = 'id_layanan'; // Tentukan primary key
    public $incrementing = false; // Jika ID tidak auto-increment
    protected $keyType = 'string'; // Jika ID berupa string

    protected $fillable = [
        'id_layanan',
        'id_pasien',
        'keterangan_kejadian',
        'tindakan',
        'created',
        'updated'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien', 'id_pasien');
    }
}
