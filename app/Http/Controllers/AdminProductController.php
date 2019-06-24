<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class AdminProductController extends Controller
{
   public function index()
    {
       
            $products= Product::orderby('id', 'desc')->get();

            return view('backend.admin.pages.product.index')->with('products',$products);
    }
    public function create()
    {
    	return view('backend.admin.pages.product.create');
    }
   
    public function edit($id)
    {
       
            $product= Product::find($id);

            return view('backend.admin.pages.product.edit')->with('product',$product);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
    ]);



    	$product = new Product;
    	$product->title = $request->title;
    	$product->description = $request->description;
    	$product->price = $request->price;
    	$product->quantity = $request->quantity;
    	$product->slug = str_slug($request->title);
    	$product->catagory_id = 1;
    	$product->brand_id = 1;
    	$product->admin_id = 1;
    	$product->save();

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location= public_path('images/products/' .$img);
            Image::make($image)->save($location);

            $product_image = new ProductImage;
            $product_image->product_id = $product->id;
            $product_image->image = $img;
            $product_image->save();

        }

    	return redirect()->route('admin.product.create');

    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
    ]);



        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();



        return redirect()->route('admin.products');

    }


    
    public function delete($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
           $product->delete();
        }
        session()->flash('success','Product has deleted successfully !!');
        return back();
    }
}
