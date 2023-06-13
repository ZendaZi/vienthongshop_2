<?php


use App\Models\admin;
use App\Models\sanpham;
use App\Models\danhmuc_sp;
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

});

// Route::get('chitietsp/{id?}', function ($id = null) {
//     // $ID= $id;
//     $sanpham=sanpham::where('id_sp',$id)->get();
//     // dd($sanpham);
//     $danhmuc_sp=danhmuc_sp::all();
//     return view('chitietsp',compact('sanpham','danhmuc_sp'))
// })->name('chitietsp');

Route::get('{id?}', function ($id) {
  
    $sanpham=sanpham::where('id_sp',$id)->get();
    $danhmuc_sp=danhmuc_sp::all();
    return view(
        'chitietsp',
        compact('sanpham','danhmuc_sp')
    );
    
})->name('chitietsp');
// Route::get('chitietsp/7', function () {
  
//     $sanpham=sanpham::where('id_sp',7)->get();
//     $danhmuc_sp=danhmuc_sp::all();
//     return view(
//         'chitietsp',
//         compact('sanpham','danhmuc_sp')
//     );
    
// })->name('chitietsp');
// Route::get('chitietsp/8', function () {
  
//     $sanpham=sanpham::where('id_sp',8)->get();
//     $danhmuc_sp=danhmuc_sp::all();
//     return view(
//         'chitietsp',
//         compact('sanpham','danhmuc_sp')
//     );
    
// })->name('chitietsp');

Route::get('giohang', function () {
    return view('giohang');
});

Route::get('dathang', function () {
    return view('dathang');
});


Route::get('ct271/login', function () {
    return view('login');
});

Route::get('backend/ct271/admin', function () {
    return view('backend/ct271/admin');
});
