<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //

    public function index(Request $req ){

        // for now .. //
        return view('home' ,[
            'pageTitle' => 'Home'
        ]);
    }
}
