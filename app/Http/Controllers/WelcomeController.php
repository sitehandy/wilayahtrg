<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // visibility - public, protected, private


    public function utama() {
        // resources/views()
        //return view('welcome');
        return redirect()->route('login');

    }
}
