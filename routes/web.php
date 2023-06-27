<?php


use App\Models\admin;
use App\Models\chitiet_dh;
use App\Models\sanpham;
use App\Models\danhmuc_sp;
use App\Models\donhang;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('login','AdminController@loginAdmin');

Route::post('login','AdminController@postloginAdmin');

Route::get('/', function () {
    $sanpham=sanpham::all();
    $danhmuc_sp=danhmuc_sp::all();
    return view('index',compact('sanpham','danhmuc_sp'));

})->name('index');

// Route::get('chitietsp/{id?}', function ($id = null) {
//     // $ID= $id;
//     $sanpham=sanpham::where('id_sp',$id)->get();
//     // dd($sanpham);
//     $danhmuc_sp=danhmuc_sp::all();
//     return view('chitietsp',compact('sanpham','danhmuc_sp'))
// })->name('chitietsp');

Route::get('sp{id?}', function ($id) {
  
    $sanpham=sanpham::where('id_sp',$id)->get();
    $danhmuc_sp=danhmuc_sp::all();
    return view(
        'chitietsp',
        compact('sanpham','danhmuc_sp')
    );
    
})->name('chitietsp');




Route::get('dm{id?}', function ($id) {
  
    $sanpham=sanpham::where('id_danhmuc',$id)->get();
    $danhmuc_sp=danhmuc_sp::all();
    return view(
        'index',
        compact('sanpham','danhmuc_sp')
    );
    
})->name('chitietsp');



Route::get('giohang', function () {
    $sanpham=sanpham::all();
    $danhmuc_sp=danhmuc_sp::all();
    return view(
        'giohang',
        compact('sanpham','danhmuc_sp')
    );
});

Route::get('mua_sp{id?}', function ($id) {
  
    $sanpham=sanpham::where('id_sp',$id)->get();
    $danhmuc_sp=danhmuc_sp::all();
    return view(
        'giohang',
        compact('sanpham','danhmuc_sp')
    );
    
})->name('giohang');

Route::post('muangay', 'App\Http\Controllers\MuaNgay@MuaNgay');

Route::get('dathang', function () {
    return view('dathang');
});



// Route::get('ct271/login', function () {
//     return view('login');
// });

// Route::get('backend/ct271/admin', function () {
//     return view('backend/ct271/admin');
// });
Route::get('login', function () {
    return view('backend.login');
})->name('login');
Route::post('login', 'App\Http\Controllers\login@login');

Route::get('quanly', function () {
    return view('backend.main');
})->name('quanly');
Route::get('quanlysp', function () {
    $listSP= sanpham::all();
    $danhmuc_sp=danhmuc_sp::all();
    return view('backend.QL_SP.qlsp_main', compact('listSP','danhmuc_sp'));
})->name('quanlysp');
Route::post('addsp', 'App\Http\Controllers\quanly@addsp');
Route::post('updatesp', 'App\Http\Controllers\quanly@updatesp');
Route::post('deletesp', 'App\Http\Controllers\quanly@deletesp');

Route::get('quanlydh', function () {
    $listSP= sanpham::all();
    $danhmuc_sp=danhmuc_sp::all();
    $donhang= donhang::all();
    $chitiet= chitiet_dh::all();
    return view('backend.QL_DH.qldh_main', compact('listSP','danhmuc_sp','donhang','chitiet'));
})->name('quanlydh');
Route::post('duyetdh', 'App\Http\Controllers\quanly@duyetdh');
=======
Route::get('admin', function () {
    return view('admin');
});

Route::get('login', function () {
    return view('login');
});

