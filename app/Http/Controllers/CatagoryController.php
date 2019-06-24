<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use Image;
use File;

class CatagoryController extends Controller
{
   public function index()
   {
   	$catagories= Catagory::orderBy('id','desc')->get();
   	return view('backend.admin.pages.catagory.index', compact('catagories'));
   }
   public function create()
   {
   	$main_catagory= Catagory::orderBy('name','desc')->where('parent_id', NULL)->get();
   	return view('backend.admin.pages.catagory.create', compact('main_catagory'));
   }

   public function store(Request $request)
   {
   	$this->validate($request,[
   		'name' => 'required',
   		'image' => 'nullable|image',
   	]);
   	$catagory = new Catagory();
   	$catagory->name = $request->name;
   	$catagory->description = $request->description;
   	$catagory->parent_id = $request->parent_id;

   	      if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location= public_path('images/catagory/' .$img);
            Image::make($image)->save($location);
            $catagory->image = $img;

        }

   	$catagory->save();

   	session()->flash('success','A new catagory has added successfully !!');
   	return redirect()->route('admin.catagories');
   }

   public function edit($id)
   {
   	   	$main_catagory= Catagory::orderBy('name','desc')->where('parent_id', NULL)->get();

   	   	$catagory= Catagory::find($id);
   	   	if (!is_null($catagory)) {
   	   		return view('backend.admin.pages.catagory.edit',compact('catagory','main_catagory'));
   	   	}else{
   	   		return redirect()->route('admin.catagories');
   	   	}

   }



      public function update(Request $request, $id)
   {
   	$this->validate($request,[
   		'name' => 'required',
   		'image' => 'nullable|image',
   	]);
   	$catagory = Catagory::find($id);
   	$catagory->name = $request->name;
   	$catagory->description = $request->description;
   	$catagory->parent_id = $request->parent_id;

   	      

   	      	if (File::exists('images/catagory/' . $catagory->image)) {
   	      		File::delete('images/catagory/' . $catagory->image);
   	      	}


            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location= public_path('images/catagory/' .$img);
            Image::make($image)->save($location);
            $catagory->image = $img;

        

   	$catagory->save();

   	session()->flash('success','Catagory has updated successfully !!');
   	return redirect()->route('admin.catagories');
   }



    
    public function delete($id)
    {
        $catagory = Catagory::find($id);
        if (!is_null($catagory)) {

        	if ($catagory->parent_id == NULL) {
   	   			$sub_catagory= Catagory::orderBy('name','desc')->where('parent_id', $catagory->id)->get();

   	   			foreach ($sub_catagory as $sub) {
   	   				
   	      	if (File::exists('images/catagory/' . $sub->image)) {
   	      		File::delete('images/catagory/' . $sub->image);
   	      		}
   	      			$sub->delete();

   	   		}
        }


   	      	if (File::exists('images/catagory/' . $catagory->image)) {
   	      		File::delete('images/catagory/' . $catagory->image);
   	      	}

           $catagory->delete();
        }
        session()->flash('success','Catagory has deleted successfully !!');
        return back();
    }


}
