<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class productsController extends Controller
{
    public function getAddProducts(Request $req){

        return view('addProducts',[
            'pageTitle' => 'Add Products',
        ]);
    }

    public function getAllProducts(Request $req){
        $allProducts = products::paginate(10);

        return view('shop' ,[
            'pageTitle' => 'shop',
            'allProducts' => $allProducts
        ]);
    }

    public function addProduct(Request $req){

        $postProduct = $req->validate([
            'name'=>'required|string|max:255',
            'description'=>'required|string|max:255',
            'price'=>'required|integer|max:10000000',
            'quantity'=>'required|integer|max:10000000'
        ]);
        // $pic = $req->file('image');
        // dd($pic);
        // $photo = Storage::putFile('/images',$req->file('image'));
        $photo = $req->file('image')->store('image','public');

        if($postProduct){
            $addProduct = products::create([
                'name'=> $postProduct['name'],
                'description'=> $postProduct['description'],
                'price'=> $postProduct['price'],
                'quantity'=> $postProduct['quantity'],
                'imagePath'=> $photo
            ]);
            return redirect()->route('shop');
        }
    }
}
