<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; //mendefiniskan nama tabel yang digunakan model
    protected $primaryKey = 'user_id'; //mendefiniskan primary key dari tabel digunakan

    protected $fillable =['level_id', 'username', 'nama', 'password'];
}
