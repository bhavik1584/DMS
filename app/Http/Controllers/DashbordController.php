<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function __construct()
    {
        view()->share(['title'=>'Dashboard']);
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view("main");
    }
}
