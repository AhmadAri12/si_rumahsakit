<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tindakan extends Model
{
    protected $table = 'tb_tindakan';
    protected $primaryKey = 'id_tindakan';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_tindakan', 'id_layanan', 'id_dokter', 'diagnosa_penyakit', 'id_obat', 'biaya_perawatan', 'status_perawatan', 'created', 'updated'
    ];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter', 'id_dokter');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat', 'id_obat');
    }

    public function layanan()
    {
        return $this->belongsTo(LayananDarurat::class, 'id_layanan', 'id_layanan');
    }
}
