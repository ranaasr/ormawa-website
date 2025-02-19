<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';

    protected $fillable = [

        'nama',
        'tgl_kegiatan',
        'organisasi_id'
    ];

    public function organisasi()
    {
        return $this->belongsTo(Organisasi::class);
    }
}
