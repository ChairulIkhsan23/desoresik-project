<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';

    protected $fillable = [
        'user_id',
        'nomor_hp',
        'alamat',
        'foto',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

     /**
     * Relasi ke tabel jadwal (Petugas memiliki banyak jadwal)
     */
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'petugas_id');
    }

    /**
     * Relasi ke tabel laporan_pengangkutan (Petugas memiliki banyak laporan)
     */
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'petugas_id');
    }
}
