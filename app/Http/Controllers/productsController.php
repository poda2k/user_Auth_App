<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function getAddProducts(Request $req){

        return view('addProducts',[
            'pageTitle' => 'Add Products',
        ]);
    }
}
