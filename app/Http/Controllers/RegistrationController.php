<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrationController extends Controller
{
    //New User Registration
    public function registration()
    {
        return view('pages.registration');
    }
    public function registrationSubmitted(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => 'required|min:3|max:20',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
                'email' => 'email',
                'password' => 'required|min:5|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                'password_confirm' => 'required|same:password',
                'address' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ],
            [
                'password.regex' => 'English uppercase characters (A - Z),
                    English lowercase characters (a - z),
                    Base 10 digits (0 - 9),
                    Non-alphanumeric (For example: !, $, #, or %),
                    Unicode characters',
            ]
        );
        $phone = User::where('phone', '=', $request->phone)->first();
        $email = User::where('email', '=', $request->email)->first();
        if ($phone) {
            return redirect()->back()->with('exist', 'This Phone Number Already Exists. Use Another Number Please');
        } elseif ($email) {
            return redirect()->back()->with('exist', 'This Email Address Already Exists. Use Another Email Please');
        } else {
            $User = new User();
            $User->name = $request->name;
            $User->phone = $request->phone;
            $User->email = $request->email;
            $User->password = md5($request->password);
            $User->address = $request->address;
            $imageName = time() . "_" . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('images'), $imageName);
            $User->image = $imageName;
            $User->save();

            return redirect(route('login'));
        }
    }
}