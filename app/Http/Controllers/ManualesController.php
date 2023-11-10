<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualesController extends Controller
{
    public function manuales()
    {
        return view('manuales');
    }
}
