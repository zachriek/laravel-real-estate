<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.guest.login');
    }

    public function store(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            toast('Login successfully!', 'success');
            return redirect()->route('home')->with('success', 'Login successfully!');
        }
        toast('Login failed!', 'error');
        return redirect()->route('login.index')->with('success', 'Login successfully!');
    }
}
