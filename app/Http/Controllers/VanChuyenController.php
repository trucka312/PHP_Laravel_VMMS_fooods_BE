<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VanChuyenController extends Controller
{
    public function vanchuyen()
    {
        return view('pages.vanchuyen');
    }
}
