<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrivateController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        $name = $user->name;

        return view('private', compact('name'));


    }
}
