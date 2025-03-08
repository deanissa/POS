<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {

        //coba akses model UserModel
        $user = UserModel::firstOrCreate(
            ['username' => 'manager22'], // Dicari dulu berdasarkan username
    [
        'nama' => 'Manager dua dua',
        'password' => Hash::make('12345'), // Password tetap dimasukkan
        'level_id' => 2
    ]
        );
        return view('user', ['data' => $user]);
    }
}