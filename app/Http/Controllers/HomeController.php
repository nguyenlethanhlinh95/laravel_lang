<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session;

class HomeController extends Controller
{
    //
    public function changeLanguage($language)
    {
        \Session::put('lang', $language);

        return redirect()->back();
    }

    public function index()
    {
        return view('index.blade.php');
    }
}
