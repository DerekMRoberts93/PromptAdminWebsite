<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{

// ---------------------------------------HOME----------------------------------------

    public function home()
    {
        return view('welcome');
    }



//-------------------------------------------Example--------------------------------------------------------------//
    public function secondary()
    {
        return view('nav-example');
    }

//-------------------------------------------------------Log In/Logout-----------------------------------------//

    public function loginAction()
    {
      cas()->authenticate();
      return redirect('/');
      
    }

    public function logoutAction()
    {
      cas()->logout();
      return redirect('/');
    }

//-----------------------------------------------------------Status-----------------------------------------//

    public function mstatus()
    {
      return view('mstatus');
    }
  }
