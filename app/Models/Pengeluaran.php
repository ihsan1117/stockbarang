<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'idkeluar','idbarang', 'namabarang' ,'tanggal', 'deskripsi', 'penerima', 'stock'
    ];
    
    public function pengeluaran(){
        return $this->belongsTo('Pemasukan');
    }
}