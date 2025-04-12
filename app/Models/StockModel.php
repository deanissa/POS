<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class StockModel extends Model
{
    protected $table = 'm_stok';
    protected $primaryKey = 'stok_id';

    protected $fillable = ['stok_kode', 'stok_nama'];

    public function barang(): HasMany
    {
        return $this->hasMany(BarangModel::class, 'stok_id', 'stok_id');
    }
}
