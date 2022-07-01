<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','namabarang','tanggal','qty','penerima'
    ];

    public function pengeluaran()
    {
        return $this->hasMany('App\Pengeluaran');
    }
}
