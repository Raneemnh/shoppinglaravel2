<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Products_details;
use Illuminate\Support\Facades\DB;


class Dashboard extends Controller
{
    public function index(Request $request){

        return view('dashboard.index');
        
    }

    public function products() {
        $prod=Products::All();
       //dd($prod);
        return view('dashboard.products',['prod'=>$prod]); 

    }

    public function create_newproducts(Request $request){

        $prod=Products::create([
            'name'=>$request->productname,//لازم نفس الاسم الي موجود بالفورم
            'Description'=>$request->Description,
            'category'=>$request->category
        ]);

        $prod->save();
        return redirect()->route('products');
    }


        public function delete(){
            $id=$_GET['id'];//ajax
            $prod=Products::find($id);
            $prod->delete();
    
        }
/////////////////////////////////////////////////
        public function edit($id){
            //dd($id);
            $products=Products::find($id);
            return view('dashboard.edit',['products'=>$products]);
        } 

        public function update(Request $request){

            //dd($request);
            Products::where('id',$request->id)
            ->update(['name'=>$request->productname,'Description'=>$request->Description]);//الاسم الي موجود بالفورم
            return redirect()->route('products');
        }
////////////////////////////////////////////////

        public function create_new_details(Request $request){

            //dd($request);
            $products_details=Products_details::Create([
                'products_id'=>$request->products_id,
                'price'=>$request->price,
                'qty'=>$request->qty,
                'image'=>$request->image,
                'color'=>$request->color
            ]);
            $products_details->save();
            return redirect()->route('showdet');

        }

        public function showproduct_details(){

            $prod=Products::All();
            $productsdetails=DB::table('Products')
            ->join('Products__details','products.id','=','products__details.products_id')
            ->get();
            //dd($productsdetails);
            return view('dashboard.product_details',['prod'=>$prod,'productsdetails'=>$productsdetails]);
        }

        ////////////////////////////////
}
