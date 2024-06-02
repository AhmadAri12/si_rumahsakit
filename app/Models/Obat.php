<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'tb_obat';

    protected $primaryKey = 'id_obat';

    public $incrementing = false;
    public $keyType = 'string';

    protected $fillable = [
        'id_obat', 'nama_obat', 'dosis_obat', 'keterangan', 'stok_obat',
    ];
}
