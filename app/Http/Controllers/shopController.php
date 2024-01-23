<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class shopController extends Controller
{

    public function getShop(Request $req){

        $allProducts = products::all();

        return view('shop' ,[
            'pageTitle' => 'shop',
            'allProducts' => $allProducts
        ]);
    }



}
