<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index() {
        return 'hello';
    }

    public function show($id)
    {
        return "hello ${id}";
    }
}
