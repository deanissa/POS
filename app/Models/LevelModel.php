<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\eloquent\Relations\BelongsTo;

class LevelModel extends Model {
    use HasFactory;
    protected $table = 'm_level'; // Pastikan ini sesuai dengan nama tabel di database
    protected $primaryKey = 'level_id'; // Sesuaikan dengan primary key di tabel

    protected $fillable = ['level_id', 'level_kode', 'nama_level']; // Sesuaikan dengan kolom di tabel

    public function user(): BelongsTo {
        return $this->belongsTo(UserModel::class);
    }
}