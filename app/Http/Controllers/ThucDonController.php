<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sanpham;

use App\Models\tuvan;
class ThucDonController extends Controller
{
    public function detail()
    {
        $khaivi = sanpham::where('danhmucmon_id', 1)->limit(4)->get();
        $monchinhGa = sanpham::where('danhmucmon_id', 2)->where('tag','Gà')->get();
        $monchinhHeo = sanpham::where('danhmucmon_id', 2)->where('tag','Heo')->get();
        $monchinhBo = sanpham::where('danhmucmon_id', 2)->where('tag','Bò')->get();
        $monchinhPho = sanpham::where('danhmucmon_id', 2)->where('tag','Bún/Phở')->get();

        $douong = sanpham::where('danhmucmon_id', 3)->get();
        return view('pages.chitietthucdon',compact('khaivi','monchinhGa','monchinhHeo','monchinhBo','monchinhPho','douong'));
    }
    public function thucdon()
    {
        return view('pages.thucdon');
    }
}
