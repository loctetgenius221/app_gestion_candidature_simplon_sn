<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Admin;
use App\Models\SuperAdmin;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AuthController extends Controller
{
    use ValidatesRequests;

    public function showLoginForm($role)
    {
        return view('auth.login', ['role' => $role]);
    }
    public function showLoginUserForm($role)
    {
        return view('auth.userLogin', ['role' => $role]);
    }

    public function login(Request $request, $role)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        switch ($role) {
            case 'user':
                if (Auth::guard('web')->attempt($credentials)) {
                    return redirect()->intended('/candidature');
                }
                break;

            case 'admin':
                if (Auth::guard('admin')->attempt($credentials)) {
                    return redirect()->intended('/dashboard');
                }
                break;

            case 'super_admin':
                if (Auth::guard('super_admin')->attempt($credentials)) {
                    return redirect()->intended('/admin-dashboard');
                }
                break;

            default:
                return back()->withErrors(['role' => 'Invalid role.']);
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout($role)
    {
        Auth::guard($role)->logout();
        return redirect('/');
    }

    public function showRegistrationForm($role)
    {
        return view('auth.register', ['role' => $role]);
    }

    public function register(Request $request, $role)
    {
        $this->validate($request, [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . $role . 's',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($data['password']);

        switch ($role) {
            case 'user':
                $this->validate($request, [
                    'date_de_naissance' => 'required|date',
                    'lieu_de_naissance' => 'required|string|max:255',
                    'adresse' => 'required|string|max:255',
                    'telephone' => 'required|string|max:15',
                    'image' => 'nullable|string|max:255',
                    'cv' => 'nullable|string|max:255',
                ]);
                User::create($data);
                break;

            case 'admin':
                $this->validate($request, [
                    'adresse' => 'required|string|max:255',
                    'telephone' => 'required|string|max:15',
                    'image' => 'nullable|string|max:255',
                ]);
                Admin::create($data);
                break;

            case 'super_admin':
                $this->validate($request, [
                    'image' => 'nullable|string|max:255',
                ]);
                SuperAdmin::create($data);
                break;

            default:
                return back()->withErrors(['role' => 'Invalid role.']);
        }

        return redirect()->route('login.form', ['role' => $role])->with('status', 'Registration successful. You can now login.');
    }
}
