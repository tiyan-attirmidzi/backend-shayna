<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerDashboards extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}
