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
        $user = UserModel::where('level_id',1)->first(); //ambil model pertama yang cocok dengan batasan kueri
        return view('user', ['data' => $user]);
    }
}