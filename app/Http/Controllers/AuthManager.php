<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function authenticated(Request $request, $user)
    {
        if ($user->user_type === 'student') {
            return redirect('/students');
        } else {
            return redirect('/index');
        }
    }

    function login()
    {
        return view('login');
    }

    function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
                return redirect()->route('index');
            
        }

        return redirect(route('login'))->with('error', 'login details
are not valid');
    }

    function register()
    {
        return view('register');
    }

    function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'number' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        if (!$user) {
            return redirect(route('register'))->with('error',
'registration details are not valid');
        }

        return redirect(route('login'))->with('success', 'registration
success, Login to access Secure Academy');
    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
?>