<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HuongDanController extends Controller
{
    public function huongdan()
    {
        return view('pages.huongdan');
    }
}
