<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'number_phone' => ['required', 'min:9','max:11'],
        ],
            [
            'name.required' => 'Họ và tên không được trống',
            'name.max' => 'Họ và tên không được quá 255 ký tự',
            'name.string' => 'Họ và tên không hợp lệ',
            //---
            'email.required' => 'Email Không được để trống',
            'email.max' => 'Email không được quá 255 ký tự',
            'email.email' => 'Email không hợp lệ',

            'email.unique' => 'Email đã được sử dụng',
            //----
            'password.required' => 'mật khẩu Không được để trống',
            'password.min' => 'Mật khẩu phải lớn hơn 8 ký tự',
            'password.confirmed' => 'Nhập lại password không hợp lệ',
            //-----
            'number_phone.required' => 'Số điện thoại không được để trống',
            'number_phone.min' => 'Số điện thoại phải lớn hơn 7 ký tự',
            'number_phone.max' => 'Số điện thoại phải nhỏ hơn 12 ký tự',
                ]
    
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'number_phone' => $data['number_phone'],
        ]);
    }
}
