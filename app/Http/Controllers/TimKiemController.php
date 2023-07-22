<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimkiemController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('inputSearch');
        echo $keyword;
        // Truy vấn bảng sanpham để tìm kiếm theo từ khóa
        $results = DB::table('sampham')
            ->where('tensp', 'LIKE', '%' . $keyword . '%')
            ->orWhere('mieuta', 'LIKE', '%' . $keyword . '%')
            ->orWhere('gia', 'LIKE', '%' . $keyword . '%')
            ->get();

        return view('pages.ketquatimkiem', compact('results'));
    }
    
    public function showSearchForm()
    {
        return view('pages.ketquatimkiem');
    }
}
?>