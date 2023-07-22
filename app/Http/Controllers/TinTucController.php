<?php

namespace App\Http\Controllers;

use App\Models\tintuc;

class TinTucController extends Controller
{
    public function tintuc()
    {
        $tintuc = tintuc::orderBy('id', 'desc')->limit(6)->get();
        return view('pages.tintuc', compact('tintuc'));
    }

    public function chitiettintuc($id)
    {
        $new = tintuc::findOrFail($id);
        return view('pages.chitiettintuc', compact('new'));
    }
}
