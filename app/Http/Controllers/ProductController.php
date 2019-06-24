<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use DB;
use Session;
class ProductController extends Controller
{
      public function index(){

   			$products= Product::orderby('id', 'desc')->get();
            return view('frontend.pages.products.index')->with('products',$products);

  		}
      public function show($slug){

   			$product = Product::where('slug',$slug)->first();
   			if (!is_null($product)) {
   				return view('frontend.pages.products.show', compact('product'));

   			}else{
   				session()->flash('errors','Sorry !! There is no product by this url...');
   				return redirect()->route('products');
   			}

  		}
}
