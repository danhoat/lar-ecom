<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    //
    function index(){

        // $products = DB::table('products')->get();
        // $html = '';
        // foreach ($products as $product) {
        //     $html.="<div class='col-md-4'>";
        //     $html.="<h3>{$product->name}</h3>";
        //     $html.='<img src="'.$product->gallery.'" width="150" />';
        //     $html.="</div>";
        // }
       // return Product::all();
        //return $html;
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function detail($id){

        $product = Product::find($id);
        //return 'detail ok'.$product;
        return view('detail',['product'=> $product]);

    }
}
?>