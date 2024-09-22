<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorld extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'message' => 'Hello World',
            'time' => microtime(true),
            'random' => rand(100, 1000),
        ]);
    }
}
