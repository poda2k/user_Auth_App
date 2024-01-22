<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopController extends Controller
{

    public function getShop(Request $req){

        return view('shop' ,[
            'pageTitle' => 'shop'
        ]);
    }

}
