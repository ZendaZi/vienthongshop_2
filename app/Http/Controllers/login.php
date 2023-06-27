<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class login extends Controller
{
    public function login(Request $request)
    {
      if ($request->username=='admin' && $request->password=='12345678' ) {
        return redirect()->route('quanly');
      } else {
        return redirect()->route('login');
      }
      

    }
}
