<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index() {
        return 'hello';
    }

    public function __invoke($id, Request $request)
    {
        return "hello ${id}";
    }
}
