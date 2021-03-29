<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guitar;

class ApiController extends Controller
{

    public function getFirstGuitar() {

        $firstGuitar = Guitar::orderBy('id', 'asc')->first();
        dd($firstGuitar);

        // return response()->json($firstGuitar);

    }

}
