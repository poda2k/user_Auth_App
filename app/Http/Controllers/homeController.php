<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class homeController extends Controller
{
    //

    public function index(Request $req ){

        // for now .. //
        $someProducts = products::all();
        $someProducts = $someProducts->only([1,2]);
        return view('home' ,[
            'pageTitle' => 'Home',
            'allProducts'=>$someProducts
        ]);
    }
}
