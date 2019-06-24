<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Drink;

class DrinkController extends Controller
{
    public function store(Request $request) {
        $drink = new Drink($request->all());

        $drink->saveOrFail();

        return response('Hello World', 200)->header('Content-Type', 'text/plain');
    }
}