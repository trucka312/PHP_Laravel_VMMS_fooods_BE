<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lienhe;
class LienHeController extends Controller
{
    public function lienhe()
    {

        $lienhe = lienhe::orderBy('id','desc')->limit(3)->get();
        return view('pages.lienhe', compact('lienhe'));
    }
}
