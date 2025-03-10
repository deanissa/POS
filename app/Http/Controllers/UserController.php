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
        $user = UserModel::create(
        ['username' => 'manager55', 
         'nama' => 'Manager55',
         'password' => Hash::make('12345'), // Password tetap dimasukkan
         'level_id' => 2
        ]
        );
         $user->username = 'manager55';

         $user->isDirty();//true
         $user->isDirty('username');//true
         $user->isDirty('nama');//false
         $user->isDirty('nama', 'username');//false

         $user->isClean();//false
         $user->isClean('username');//fa;se
         $user->isClean('nama');//true
         $user->isClean('nama', 'username');//true

         $user->save();

         $user->isDirty();//false
         $user->isClean();//true
         dd($user->isDirty());
    }
}