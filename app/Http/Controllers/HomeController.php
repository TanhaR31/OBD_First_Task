<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //User Index
    public function index()
    {
        // $users = DB::table('users')->get();
        // return view('index')->with('users', $users);
        return view('index');
    }
}