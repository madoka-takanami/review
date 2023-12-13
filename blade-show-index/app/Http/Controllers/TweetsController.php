<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index() {
        return 'hello';
    }

    public function show($id, Request $request)
    {
        return "Tweets ${id}";
    }
}
