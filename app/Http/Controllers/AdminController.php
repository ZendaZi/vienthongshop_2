<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Validation\ValidatesRequests;


class AdminController extends Controller
{
    
    public function loginAdmin()
    {
       
        return view(view: 'login');

    } 

    public function postloginAdmin(Request $request)

     {
        $remember = $request->has(key: 'remember_me') ? true : false; 
        if(auth()->attempt([
            'username'=>$request->admin_user,
            'password'=>$request->admin_pass
        ], $remember)){
            return redirect()->to(path: 'admin');
        }

    
    }

}