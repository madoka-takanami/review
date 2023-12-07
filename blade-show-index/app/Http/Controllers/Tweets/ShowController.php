<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param $id
     * @param \Illuminate\Http\Request $request
     */
    public function __invoke($id, Request $request)
    {
        return view('show.show', ['id' => $id]);
    }
}
