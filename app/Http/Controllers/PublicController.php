<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        return view('welcome');
    }

    public function setlocale($lang){
      
        session()->put('locale', $lang);
        return redirect()->back();

    }
}
