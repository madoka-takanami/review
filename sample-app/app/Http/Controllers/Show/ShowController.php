<?php

namespace App\Http\Controllers\Show;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($id, Request $request)
    {
        return "Hey pal, this is a single action controller {$id}, which does not allow any other routes to pass API endpoint to it";
    }
}
