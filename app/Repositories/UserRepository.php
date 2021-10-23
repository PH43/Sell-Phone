<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{
public function changePassword($param){
    $users = User::find(Auth::user()->id);
    $users->password = bcrypt($param);
    $users->save();
}
public function updateAccount($param){
    $user = User::find(Auth::user()->id);
    $user->update([
        'name' => $param['name'],
        'email' => $param['email'],
        'number_phone' => $param['phone'],
    ]);
}
}
