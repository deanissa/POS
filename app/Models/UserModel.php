<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use illuminate\Foundation\Auth\User as Authenticatable; //implententasi class Authenticable
use App\Models\LevelModel;

class UserModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'm_user'; //mendefiniskan nama tabel yang digunakan model
    protected $primaryKey = 'user_id'; //mendefiniskan primary key dari tabel digunakan
    protected $hidden = ['password'];// jangan ditampilkan saat select
    protected $casts = ['password' => 'hashed'];
    protected $fillable =['username', 'password', 'nama', 'level_id', 'vreated_at', 'updated_at'];
    public function level(): BelongsTo 
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
