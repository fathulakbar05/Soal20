<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    public $timestamps = true;

    protected $fillable = [
        'id_buku',
        'nama_peminjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];

    public function buku()
    {
        return $this->belongsTo(buku::class, 'id_buku', 'id_buku');
    }
}
