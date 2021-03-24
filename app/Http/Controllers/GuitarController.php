<?php

namespace App\Http\Controllers;
use App\Guitar;

use Illuminate\Http\Request;



class GuitarController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Guitar $guitars)
    {
        return view('guitars.create', compact('guitars'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        $data = $request->all();

        $guitar = new Guitar();
        $guitar->fill($data);
        $guitar->save();
        $guitarOrdered = Guitar::orderBy('id', 'desc')->first();

        return redirect()->route('guitars.index', $guitarOrdered);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateForm(Request $request) {

        $request->validate([
            "brand" => 'required|max:60',
            "model" => 'required|max:60',
            "type" => 'nullable|max:60',
            "strings" => 'nullable|numeric|between:6,26',
            "url" => 'nullable|between:7,2048'
        ]);

    }

}
