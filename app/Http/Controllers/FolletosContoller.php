<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolletosContoller extends Controller
{
    public function folletos()
    {
        return view('folletos');
    }
}
