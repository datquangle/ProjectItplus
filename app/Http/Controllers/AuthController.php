<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function getRegister(){
        return view('adminusers.register');
    }
    public function getLogin(){
        return view('adminusers.login');
    }

    public function postRegister(RegisterRequest $request){
        $user = $request->only('name' ,'username','email', 'password');
        $user['password']= Hash::make($request->password);
        $user['slug'] = Str::slug($user['name']);
        $user['created_at']= now();
        $user['updated']= now();


        User::create($user);
        // DB::table('users')->insert($user);
        // dd($user);
        return redirect()->route('get.login');
    }

    public function postLogin(Request $request){
        $user = $request->only('username', 'password');
        if(Auth::attempt($user)){
            return redirect(route('home'))->with('success', 'Dang nhap thanh cong');
        }
        return redirect()->back()->with('error', 'Tai khoan hoac mat khau ko dung');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('get.login')->with('success', 'Dang xuat thanh cong');
    }
}
