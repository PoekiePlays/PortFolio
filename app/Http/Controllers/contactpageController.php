<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactpageController extends Controller
{
    public function contact()
    {
        return view('contactpage');
    }
}
