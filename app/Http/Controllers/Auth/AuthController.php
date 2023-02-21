<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if(Auth::attempt(["email"=>$request->email,"password"=>$request->password],$request->remember_me)){
            toastr()->success("Logged in successfully.");
            $request->session()->regenerate();
            return redirect()->intended("/");
        }
        toastr()->error("Credentials incorrect.");
        return redirect()->back();
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        toastr()->success("Registration successfully.");
        return redirect("/");
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        Auth::logout();
        toastr()->success("Logged out successfully.");
        return redirect("/login");
    }
}
