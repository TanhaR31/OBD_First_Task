<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }
    public function loginSubmit(Request $req)
    {
        $c = User::where('email', $req->email)
            ->where('password', md5($req->password))
            ->first();

        if ($c) {
            session()->put('user', $c->id);
            session()->put('username', $c->name);
            if ($req->remember) {
                setcookie('remember', $req->email, time() + 36000); //36000 sec or 600 min or 10 hours
            } else {
                setcookie('remember', "");
            }
            return redirect()->route('dashboard');
        }

        return redirect()->back()->with('message', 'Email & Password Did Not Match');
    }
    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}