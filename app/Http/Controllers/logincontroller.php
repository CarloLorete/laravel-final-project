<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller

{
   
    public function showLoginForm(){

      return view('login');
    }
    public function login()
    {
      return redirect()->route('dashboard_success');
    }
}
