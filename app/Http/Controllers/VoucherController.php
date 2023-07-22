<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\voucher;

class VoucherController extends Controller
{
    public function voucher()
    {
        $voucher = voucher::orderBy('id', 'desc')->get();
        return view('pages.voucher', compact('voucher'));
    }
}
