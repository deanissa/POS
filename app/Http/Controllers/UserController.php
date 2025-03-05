<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user demhan Eloquent Model
        $data = [
            //'username' => 'customer-1',
            'nama' => 'Pelanggan Pertama',
            //'password' => Hash::make('12345'),
            //'level_id' => 4
        ];
        UserModel::where('username', 'customer-1')->update($data);

        //coba akses model UserModel
        $user = UserModel::all(); //ambil semua data dari tabel m_user
        return view('user', ['data => $user']);
    }
}