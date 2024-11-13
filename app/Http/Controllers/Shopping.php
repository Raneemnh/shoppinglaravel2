<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Products_details;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class Shopping extends Controller
{
    public function index(){
        return view('shopping.landingpage');
    }

    public function electric(){
        $product=Products::all();
        return view('shopping.electric',['product'=>$product]);
    }

////////////////////////////////////////////////////////////////////////////////
    public function productdetails($id)
    {
        
        $producdetails=DB::table('products')
        ->join('products__details','products.id','=','products__details.products_id')
        ->where('products.id','=',$id)
        //->select('products.*', 'products__details.*')
        ->first();

        return view('shopping.product_details',['prod'=>$producdetails]);
    }
/////////////////////////////////////////////////////////////////////////////

    public function add_to_cart(){

        $counter=session::get('counter');
        $counter++;
        session::put('counter',$counter);//refresh
        return view('shopping.landingpage');

    }



   // public function viewCart()
   // {
   // $cartItems = session()->get('cart');

    //return view('shopping.cart', compact('cartItems'));
    //}


//////////////////////////////////////////////////////////////////////////////////////
    public function plant(){

        $prod=Products::all();
        return view('shopping.plant',['prod'=>$prod]);
        //dd($prod);
    }

    public function homekit(){

        $prodk=Products::all();
        return view('shopping.homekit',['prodk'=>$prodk]);
        //dd($prod);
    }
/////////////////////////////////////////////////////////////////////////////////////////   
    
}
