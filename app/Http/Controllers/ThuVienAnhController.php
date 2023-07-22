<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thuvienanh;

class ThuVienAnhController extends Controller
{
    public function thuvienanh()
    {

        $tvanh = thuvienanh::orderBy('id','desc')->limit(9)->get();
        return view('pages.thuvienanh', compact('tvanh'));
    }
}
