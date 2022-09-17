<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;
use Session;

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
    function search(){

    }
    function addToCart(Request $req){
        if( $req->session()->has('user') ){
            $cart = new Cart;
            $cart->user_id      = $req->session()->get('user')['id'];
            $cart->product_id   = $req->product_id;
            $cart->number_item  = 1;
            $cart->save();
            return redirect('/cartlist');
        }
        return redirect('/login');

    }
    static function cartItem(){
        $user = session()->get('user');
        if($user){
            $user_id = $user['id'];
            return Cart::where('user_id', $user_id)->count();
        }
        return 0;

    }
    function cartList(){

        $user = session()->get('user');
        $cart = array();
        if($user){
            $user_id    = $user['id'];
            $products = DB::table('cart')->join('products','cart.product_id','=','products.id')
            ->where('cart.user_id',$user_id)
            ->select('products.*','cart.id as cart_id')
            ->get();
           // $cart       =  Cart::where('user_id', $user_id);
        }

        return view('cart', ['products' => $products]);
    }
    static function removeCart($id){

        //return 'check '.$id;
        Cart::destroy($id);
        return redirect('/cartlist');

    }
    function listProducts(){
        //return 'list Products';
        $products = Product::all();
        // DB::table('users')->paginate(15)
        return view('products',['products' => $products]);
    }
    function listProductsPaginate($currentPage){

        $numberItemPerpage = 3;
        echo $currentPage;
        $perPage = 3;
       // Articles::getPaginator()->setCurrentPage($page_num);
       // $products = DB::table('products')->paginate($page_id);
        //paginate($perPage = null, $columns = ['*'], $pageName = 'page', $page = null)

        $products = Product::paginate($numberItemPerpage);
        return view('products',['products' => $products]);

    }
}
?>