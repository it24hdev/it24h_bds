<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
     public function register(Request $request){

        // dd($request);
        $request -> validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'new_email' => ['required', 'string', 'email', 'max:255', 'unique:customers,email'],
                'password' => ['required', 'string', 'regex:/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*#?&]{8,255}$/', 'min:8', 'confirmed'],
            ],
            [
                'required' => ':attribute không được để trống!',
                'regex' => ':attribute dài từ 8 ký trở lên, có ít nhất một chữ và một số!',
                'confirmed' => ':attribute nhập lại không chính xác!',
                'max' => ':attribute dài tối đa 255 ký tự!',
                'unique' => ':attribute đã tồn tại trên hệ thống',
            ],
            [
                'name' => 'Họ tên',
                'new_email' => 'Email',
                'password' => 'Mật khẩu',
            ],
        );

        $input = [
            'name' => $request->name,
            'email' => $request->new_email,
            'password' => Hash::make($request->password),
        ];
        $data = Customer::create($input);

        dd($data);
        // Session::put('is_login', true);
        // Session::put('user_id', $data->id);
        return \redirect()->route('home');
    }
}
