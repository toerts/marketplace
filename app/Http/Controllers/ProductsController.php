<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Products;

class ProductsController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('products',['products'=>$products]);
    }

    public function create(Request $request){
        //Validation
        $products = Products::all();
        $name = $request->input('name');
     
        if (empty($name)){
            return view('products',['products'=>$products,'fail'=>true]);
        }

         $product = Products::create([
            'name' => $name
        ]);

        //Success Response
        if ($product){
            return redirect(route('products.list'));
        }

         //Failed Response
        
        return view('products',['products'=>$products,'fail'=>true]);
       
    }
}
