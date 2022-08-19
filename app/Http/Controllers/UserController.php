<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
class UserController extends Controller
{
     public function register(Request $request){

        $validate = Validator::make($request->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:customers,email'],
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
                'email' => 'Email',
                'password' => 'Mật khẩu',
            ],
        );
        if($validate->fails()){
        return response()->json([
            'status'=>0, 
            'error'=>$validate->errors()->toArray()
          ]);
        }

        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        try{
            DB::beginTransaction();
            $data = Customer::create($input);
            DB::commit();
            Session::put('is_login', true);
            Session::put('user_id', $data->id);
        }
        catch (\Exception $exception){
            DB::rollBack();
            Session::put('is_login', false);
        }
       
        return response()->json([
            'status'=>1
          ]);
    }

    // public function login(Request $request){
    //     $request->validate(
    //         [
    //             'email' => ['required', 'string', 'email'],
    //             'password_login' => ['required', 'string'],
    //         ],
    //         [
    //             'required' => ':attribute không được để trống!',
    //         ],
    //         [
    //             'email' => 'Email',
    //             'password_login' => 'Mật khẩu',
    //         ],
    //     );
    //     $email = $request->email;
    //     $password = $request->password_login;
    //     $result = Customer::where('email', $email)->first();
    //     if(empty($request->email) || empty($result)){
    //         return \back()->with('error', 'Email không chính xác!');
    //     }else{
    //         if (!(Hash::check($password, $result->password))) {
    //             return \back()->with('error', "Mật khẩu không chính xác!");
    //         } else {
    //             if($request->remember_me == 1){
    //                 Cookie::queue('remember-me', $result->id, 1051200);
    //             }
    //             Session::put('is_login', true);
    //             Session::put('user_id', $result->id);
    //             return \redirect()->route('user_account');
    //         }
    //     }
    // }
}
