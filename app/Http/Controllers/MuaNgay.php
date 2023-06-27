<?php

namespace App\Http\Controllers;

use App\Models\chitiet_dh;
use App\Models\donhang;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MuaNgay extends Controller
{
    public function MuaNgay(Request $request)
    {
        // dd($request->all());
        // DB::table('NGUOI_DUNG')
        //     ->where('ID_NGUOIDUNG', $request->ID_NGUOIDUNG)
        //     ->update([
        //         'TRANGTHAI' => 'Đã khoá',
        //     ]);

       


        DB::table('donhang')
        ->insert([
            'ten_kh' => $request->ten_kh,
            'sdt_kh' => $request->sdt_kh,
            'dc_kh' => $request->dc_kh,
            'trangthai' => 'Đã đặt',
        ]);
        $dh=donhang::all()->last();
if ($dh !=null) {
  $iddh=$dh->id_dh;
  DB::table('chitiet_dh')
  ->insert([
    'id_dh'=> $iddh,
      'id_sp' => $request->id_sp,
      'soluong' => $request->soluong,
  ]);
}else{
   return redirect()->back();
}
return redirect()->route('index');
    }
}
