<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Flavor;

class FlavorController extends Controller
{
    public function store(Request $request) {
        $flavor= new Drink($request->all());

        $flavor->saveOrFail();

        return response('Hello World', 200)->header('Content-Type', 'text/plain');
    }

    public function list() {
        return Flavor::all();
    }
}