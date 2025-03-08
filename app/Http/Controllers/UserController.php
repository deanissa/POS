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
        $user = UserModel::firstOrNew(
            ['username' => 'manager33'], // Dicari dulu berdasarkan username
     [
         'nama' => 'Manager tiga tiga',
         'password' => Hash::make('12345'), // Password tetap dimasukkan
         'level_id' => 2
        ]
        );
        $user -> save();
        return view('user', ['data' => $user]);
    }
}