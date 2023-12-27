<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminuserController extends Controller
{
    public function getRegister(){
        return view('adminusers.register');
    }
    public function getLogin(){
        return view('adminusers.login');
    }

    public function postRegister(RegisterRequest $request){
        $user = $request->only('username','role','email', 'password');
        $user['password']= Hash::make($request->password);
        $user['slug'] = Str::slug($user['username']);
        $user['created_at']= now();
        $user['updated']= now();


        User::create($user);
        // DB::table('users')->insert($user);
        // dd($user);
        return redirect()->route('admin.adminuser.index');
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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $users = User::orderBy('id', 'DESC')->paginate(16);
            // dd($categories);
            return view('adminusers.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
