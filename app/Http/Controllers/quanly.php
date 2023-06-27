<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class quanly extends Controller
{
    public function addsp(Request $request)
    {
        DB::table('sanpham')
            ->insert([
                'ten_sp' => $request->ten_sp,
                'maso_sp' => $request->maso_sp,
                'id_danhmuc' => $request->id_danhmuc,
                'giaithich_sp' => $request->giaithich_sp,
                'link_imgsp' => $request->link_imgsp,
                'gia_sp' => $request->gia_sp,
                'kho' => $request->kho,
            ]);

        return redirect()->route('quanlysp');
    }

    public function updatesp(Request $request)
    {

        DB::table('sanpham')
            ->where('id_sp', $request->id_sp)
            ->update([
                'ten_sp' => $request->ten_sp,
                'maso_sp' => $request->maso_sp,
                'id_danhmuc' => $request->id_danhmuc,
                'giaithich_sp' => $request->giaithich_sp,
                'link_imgsp' => $request->link_imgsp,
                'gia_sp' => $request->gia_sp,
                'kho' => $request->kho,
            ]);

        return redirect()->route('quanlysp');
    }
    public function deletesp(Request $request)
    {
        DB::table('sanpham')->where('id_sp', $request->id_sp)->delete();
        return redirect()->route('quanlysp');
    }


    public function duyetdh(Request $request)
    {

        DB::table('donhang')
            ->where('id_donhang', $request->id_donhang)
            ->update([
                'trangthai' => 'Đã duyệt',
            ]);

        return redirect()->route('quanlydh');
    }
}
