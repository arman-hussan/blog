<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\Product;
use Session;
use Illuminate\Support\Facades\Redirect;

class PagesController extends Controller
{
   public function index(){

   	      
   			$products= Product::orderby('id', 'desc')->get();

  		return view('frontend.pages.index',compact('products'));   
  		}



      public function search(Request $request){

      	$search = $request->search;

   			$products= Product::orWhere('title', 'like','%'.$search.'%')
   			->orWhere('description','like','%'.$search.'%')
   			->orWhere('slug','like','%'.$search.'%')
   			->orWhere('price','like','%'.$search.'%')
   			->orWhere('quantity','like','%'.$search.'%')
   			->orderby('id', 'desc')->get();
            return view('frontend.pages.products.search', compact('search','products'));

  		}

 
}
  