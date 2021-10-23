<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepo)
    {

        $this->userRepo = $userRepo;
    }
    public function showForm(){
        return  view('auth/changePassword');
    }
    public function changePassword(Request $rq){
        $user =    Auth()->user();
        if(Hash::check($rq->oldpassword, $user->password)){
            $this->userRepo->changePassword($rq->password);
            return  response()->json(1);
        }else{
            return  response()->json(0);
        }
    }
    public function showInfo(){
        $user = User::find(Auth::user()->id);
  
        return view('auth/account' ,compact('user'));
    }

    public function updateAccount(Request $rq){
      $this->userRepo->updateAccount($rq->all());
        return response()->json();
    }
}
