<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            $name = $user->name;
            $logged = true;

        } else {

            $logged = false;
            $name = '';

        }


        // ['logged' => $logged, 'name' => $name]         <- array version
        return view('public', compact('logged', 'name'));
    }
}
