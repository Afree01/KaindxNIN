<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Auth\User;
use App\Models\Auth\Profile;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegist()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function regist(Request $request)
    {
        
        $request->validate([
            'regist.email' => 'required|email|unique:users,email',
            'regist.password' => 'required|min:8',
            'regist.nama_depan' => 'required|string|max:50',
            'regist.nama_belakang' => 'required|string|max:50',
            'regist.no_hp' => 'required|numeric',
            'regist.alamat' => 'required|string|max:255',
        ]);
    
        DB::beginTransaction();
        try {
            $user = User::create([
                'email' => $request->input('regist.email'),
                'password' => Hash::make($request->input('regist.password')),
            ]);
    
            // Membuat profil user
            Profile::create([
                'user_id' => $user->id,
                'firstName' => $request->input('regist.nama_depan'),
                'lastName' => $request->input('regist.nama_belakang'),
                'phone' => $request->input('regist.no_hp'),
                'email' => $request->input('regist.email'),
                'address' => $request->input('regist.alamat'),
            ]);
    
            // event(new Registered($user));
    
            DB::commit();
    
            return redirect()->route('login.show')->with('success', 'Registration successful! Please verify your email.');
        } catch (\Exception $e) {
            DB::rollBack();
            // Debug error
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',    
            'password' => 'required',
        ]);
        // dd($request->all());
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }
    
        return redirect()->back()->withErrors(['error' => 'Invalid email or password.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
