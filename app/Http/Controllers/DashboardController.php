<?php

namespace App\Http\Controllers;
use App\Guitar;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guitars = Guitar::all();
        return view('guitars.index', compact('guitars'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $guitar
     * @return \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        return view('guitars.show', compact('guitar'));
    }

}
