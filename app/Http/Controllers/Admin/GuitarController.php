<?php

namespace App\Http\Controllers\Admin;
use App\Guitar;
use App\Http\Controllers\Controller;

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
        $guitarOrdered = Guitar::orderBy('id', 'desc')->first();

        $guitar->save();
        return redirect()->route('guitars.index', compact('guitar'));
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
     * @param  Guitar  $guitar
     * @return \Illuminate\Http\Response
     */
    public function edit(Guitar $guitar)
    {
        // dd($guitar);
        return view('guitars.edit', compact('guitar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $guitar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guitar $guitar)
    {
        $data = $request->all();
        // validation
        $guitar->update($data); // similar to $guitar->fill in store

        return redirect()->route('guitars.show', compact('guitar'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $guitar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guitar $guitar)
    {
        $guitar->delete();

        return redirect()->route('guitars.index');
    }


    /**
     * Function to validate form fields. */

    private function validateForm(Request $request) {

        $request->validate([
            "brand" => 'required|max:60',
            "model" => 'required|max:60',
            "type" => 'nullable|max:60',
            "strings" => 'nullable|numeric|between:6,26',
            "url" => 'nullable|between:7,2048',
            "price" => 'nullable|between:2,8'
        ]);

    }

}
