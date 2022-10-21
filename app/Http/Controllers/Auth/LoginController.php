<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        if(Auth::check())
        {
            return redirect()->route('index');
        }
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $remember = $request->remember;
        $remember ? $remember = true : $remember = false;
        $user = User::where('username', $request->username)->first();

        if($user && Hash::check($request->pwd, $user->password))
        {
            Auth::login($user, $remember);
            return redirect()->route('index')->with('success', 'Welcome back');
        }
        return back()->withErrors([
            'username' => 'Kullanıcı adı veya şifre hatalı',
            'pwd' => 'Kullanıcı adı veya şifre hatalı'
        ]);
    }

    public function destroy()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
